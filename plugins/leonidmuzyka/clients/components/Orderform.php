<?php namespace Leonidmuzyka\Clients\Components;

use Validator;
use Redirect;
use Illuminate\Support\Facades\URL;

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

		$action = post('action');
		if ($action == 'from-main') {
			$post_commentary = post('commentary');
			$post_name = post('name');
			$post_phone = post('phone_test');
						$lbl_commentary = 'commentary';
						$lbl_name = 'name';
						$lbl_phone = 'phone_test';

		} else if ($action == 'from-footer'){
			$post_commentary = post('commentary1');
			$post_name = post('name1');
			$post_phone = post('phone_test1');
						$lbl_commentary = 'commentary1';
						$lbl_name = 'name1';
						$lbl_phone = 'phone_test1';
		} else {
			die ('Something is broken');
		}

      $validator = Validator::make(

	      [
          $lbl_commentary => $post_commentary,
	        $lbl_name => $post_name,
	        $lbl_phone => $post_phone,
				],
        [
	        $lbl_commentary => 'required|min:2|regex: /^[\pL\pM\pN_ .,;:!?()-]+$/u',
	        $lbl_name => 'required|min:3|regex: /^[\pL\pM -]+$/u',
	        $lbl_phone => 'required|min:14|regex: /^[\pM\pN ()-]+$/u',
        ],
	      [
		      $lbl_commentary.'.required' => 'Пожалуйста напишите пару слов',
		      $lbl_commentary.'.min' => 'Комментарий должен быть больше 2-х символов',
		      $lbl_commentary.'.regex' => 'Допускаются буквы, цифры и знаки препинания ( , . ; : ! ? - ). Приносим извинения за неудобства',
		      $lbl_name.'.required' => 'Подскажите, как к Вам обращаться',
		      $lbl_name.'.min' => 'Имя от :min букв',
		      $lbl_name.'.regex' => 'Допускаются буквы, пробелы и тире. Приносим извинения за неудобства',
		      $lbl_phone.'.required' => 'Пожалуйста оставьте телефон для связи с Вами',
		      $lbl_phone.'.min' => 'В номере должно быть 10 цифр. Пожалуйста проверьте правильность',
		      $lbl_phone.'.regex' => 'Телефоны обычно состоят из цифр, скобочек и пробелов :D',

	      ]
      );

      if($validator->fails()) {
				if ($action == 'from-main') {
					return Redirect::back() ->withErrors($validator)
	                                ->withInput();
				} else if ($action == 'from-footer') {
					return Redirect::to('/obratnaya-svyaz') ->withErrors($validator)
                                ->withInput();
				} else { // bac action given (hacked)
					return Redirect::back();
				}


//	      return Redirect::to(URL::current().'#contact-form1')
//		      ->withErrors($validator)
//	      		                            ->withInput();
      }

		/**
		 *  Преобразование выбранных картинок из сессии в стринг для сохранения
		 */
		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}

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
		 *  Определение типа клиента
		 */
		$type = 10;
		if ($action == 'from-main') {
			$type = 1;
		} else if ($action == 'from-footer') {
			$type = 0;
		} else { // hack attempt
			return Redirect::back();
		}


			/**
			 * Запись в базу
			 */
      $clients = new Clients;
			$clients->client_commentary = $post_commentary;
			$clients->name = $post_name;
      $clients->phone = $post_phone;
      $clients->chosen_pics = $chosen_pics_str;
      $clients->type = $type;
      $clients->save();

      $this->page['flashMsg'] = [
			        'type'=>'success',
			        'msg'=>'Заявка принята!'
			      ];
      $this->page['for_dump'] = [
                "commentary" => $post_commentary,
      	        "name" => $post_name,
      	        "phone_test" => $post_phone,
	              "chosen_pics" => $chosen_pics_str,
      				];
			Redirect::back()->withInput();
    }



	public function onUpdateChosenPics() {
		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}
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
		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}

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
