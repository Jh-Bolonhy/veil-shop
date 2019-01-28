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
	        "commentary" => 'min:6|regex: /^[\pL\pM\pN_ .,;:!?-]+$/u',
          "name" => 'required|min:3|regex: /^[\pL\pM -]+$/u',
	        "phone_test" => 'required|min:14|regex: /^[\pM\pN ()-]+$/u',
        ],
	      [
	      	'commentary.min' => 'Комментарий должен быть больше 6-ти символов',
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
		 *  Преорбазование phone_test'a к виду интежера
		 */

			//$char_phone = substr(post('phone_test'),1,3).substr(post('phone_test'),6, 3).substr(post('phone_test'),10);
			//$this->page['char_phone_pre'] = $char_phone;

			/**
			 * Запись в базу
			 */
      $clients = new Clients;
			$clients->client_commentary = post('commentary');
			$clients->name = post('name');
      $clients->phone = post('phone_test');
      $clients->save();

      $this->page['flashMsg'] = [
			        'type'=>'success',
			        'msg'=>'Заявка принята!'
			      ];
      $this->page['for_dump'] = [
                "commentary" => post('commentary'),
      	        "name" => post('name'),
      	        "phone_test" => post('phone_test'),
      				];
			Redirect::back()->withInput();
    }
}
