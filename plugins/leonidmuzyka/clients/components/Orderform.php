<?php namespace Leonidmuzyka\Clients\Components;

use Validator;
use Redirect;

use ValidationException;
use Lang;

use Cms\Classes\ComponentBase;
use System\Classes\CombineAssets;

use LeonidMuzyka\Clients\Models\Clients;

class Orderform extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'orderform Component',
            'description' => 'Form to add to any page in the project to Convert visitor into a client'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {

	    $scss = [
	          'assets\css\default.scss'
	        ];
	    $js  = [
	         'assets/js/jquery-3.3.1.min.js',
	         'assets/js/clients.js'
	       ];
	    $this -> addCss(CombineAssets::combine($scss, plugins_path() . '\leonidmuzyka\clients'));
      $this -> addJs(CombineAssets::combine($js, plugins_path() . '\leonidmuzyka\clients'));
	    /**
	     * masking input data
	     */
	    $css = [
	    	'assets\css\masking-input.css',
	    ];

	    $this -> addCss(CombineAssets::combine($css, plugins_path() . '\leonidmuzyka\clients'));
			$this->page ['plugins_path'] = plugins_path();

			$this->loadSessionVars();

    }
	/**
	 *
	 */
	public function onAddOrder() {


      $validator = Validator::make(

	      [
          "commentary" => post('commentary'),
	        "name" => post('name'),
	        "phone_test" => post('phone_test'),
				],
        [
	        "commentary" => 'required|min:2|regex: /^[\pL\pM\pN_ .,;:!?-]+$/u',
          "name" => 'required|min:3|regex: /^[\pL\pM -]+$/u',
	        "phone_test" => 'required|min:14|regex: /^[\pM\pN ()-]+$/u',
        ],
	      [
	      	'commentary.required' => 'Пожалуйста напишите пару слов',
	      	'commentary.min' => 'Комментарий должен быть больше 2-х символов',
	      	'commentary.regex' => 'Допускаются буквы, цифры и знаки препинания ( , . ; : ! ? - ). Приносим извинения за неудобства',
		      'name.required' => 'Подскажите, как к Вам обращаться',
		      'name.min' => 'Имя от :min букв',
		      'name.regex' => 'Допускаются буквы, цифры, пробелы и тире. Приносим извинения за неудобства',
		      'phone_test.required' => 'Пожалуйста оставьте телефон для связи с Вами',
		      'phone_test.min' => 'В номере должно быть 10 цифр. Пожалуйста проверьте правильность',
		      'phone_test.regex' => 'Телефоны обычно состоят из цифр, скобочек и пробелов :D',

	      ]
      );

      if($validator->fails()) {

	      return Redirect::back()->withErrors($validator)
		                            ->withInput();
      }

		/**
		 *  Преобразование выбранных картинок из сессии в стринг для сохранения
		 */
			session_start();
			$chosen_pics_str = '';
			$only_title_arr=[];
			if (isset($_SESSION['pics_chosen'])){
				foreach ($_SESSION['pics_chosen'] as $key => $item){
					foreach ($item as $url => $title){
						$only_title_arr[] = $title;
					}
				}
			}
			$chosen_pics_str = implode(' || ',$only_title_arr);



			/**
			 * Запись в базу
			 */
      $clients = new Clients;
			$clients->client_commentary = post('commentary');
			$clients->name = post('name');
      $clients->phone = post('phone_test');
      $clients->chosen_pics = $chosen_pics_str;
      $clients->save();

      $this->page['flashMsg'] = [
			        'type'=>'success',
			        'msg'=>'Заявка принята!'
			      ];
      $this->page['for_dump'] = [
                "commentary" => post('commentary'),
      	        "name" => post('name'),
      	        "phone_test" => post('phone_test'),
	              "chosen_pics" => implode(' || ',$only_title_arr),
      				];
			Redirect::back()->withInput();
    }



	public function onUpdateChosenPics() {
		session_start();
		$return_arr=[];
		if (isset($_SESSION['pics_chosen'])){
			foreach ($_SESSION['pics_chosen'] as $key => $item){
				foreach ($item as $url => $title){
					$return_arr[] = $url;
				}
			}
		}
		return $return_arr;
	}

	private function loadSessionVars() {
		session_start();

		$return_arr=[];
		if (isset($_SESSION['pics_chosen'])){
			foreach ($_SESSION['pics_chosen'] as $key => $item){
				foreach ($item as $url => $title){
					$return_arr[] = $url;
				}
			}
		}
		$this->page ['pics_chosen'] = $return_arr;
	}
}
