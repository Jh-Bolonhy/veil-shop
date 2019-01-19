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
	    $css = [
	          'assets\css\default.scss'
	        ];
	    $js  = [
	         'assets/js/jquery-3.3.1.min.js',
	         'assets/js/clients.js'
	       ];

	    $this -> addCss(CombineAssets::combine($css, plugins_path() . '\leonidmuzyka\clients'));
	    $this -> addJs(CombineAssets::combine($js, plugins_path() . '\leonidmuzyka\clients'));
    }
	/**
	 *
	 */
	public function onAddOrder() {


      $validator = Validator::make(

	      [
          "commentary" => post('commentary'),
	        "name" => post('name'),
	        "phone" => post('phone'),
				],
        [
	        "commentary" => 'min:6|regex: /^[\pL\pM\pN_ .,;:!?-]+$/u',
          "name" => 'required|min:3|regex: /^[\pL\pM\pN -]+$/u',
          "phone" => 'required|min:6|alpha_num',


        ],
	      [
	      	'commentary.min' => 'Комментарий должен быть больше 6-ти символов',
	      	'commentary.regex' => 'Допускаются буквы, цифры и знаки препинания ( , . ; : ! ? - ). Приносим извинения за неудобства',
		      'name.required' => 'Подскажите, как к Вам обращаться',
		      'name.min' => 'Имя от :min букв',
		      'name.regex' => 'Допускаются буквы, цифры, пробелы и тире. Приносим извинения за неудобства',
		      'phone.required' => 'Пожалуйста оставьте телефон для связи с Вами',
		      'phone.min' => 'Телефон от :min-ти цифр',
		      'phone.alpha_num' => 'Телефоны обычно состоят из цифр :D'
	      ]
      );

      if($validator->fails()) {

	      return Redirect::back()->withErrors($validator)
		                            ->withInput();
      }

      $clients = new Clients;
			$clients->client_commentary = post('commentary');
			$clients->name = post('name');
      $clients->phone = post('phone');
      $clients->save();

			Redirect::back()->withErrors($validator)
											->withInput();
      $this->page['flashMsg'] = [
			        'type'=>'success',
			        'msg'=>'Заявка принята!'
			      ];
      $this->page['clients'] = Clients::lists('id','name','phone');

    }
}
