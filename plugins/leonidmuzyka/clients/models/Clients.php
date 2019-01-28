<?php namespace LeonidMuzyka\Clients\Models;

use Model;

/**
 * Model
 */
class Clients extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leonidmuzyka_clients_orders';

    /**
     * @var array Validation rules
     */
    public $rules = [
	    'name'                  => 'required|between:4,255',
	    'phone'                 => 'required|min:14|regex: /^[\pM\pN ()-]+$/u',
    ];

			/**
			 * @var array Guarded fields
			 */
		 protected $guarded = ['*'];

		 /**
		  * @var array Fillable fields
		  */
		 protected $fillable = [];

		 /**
		  * @var array Relations
		  */
		 public $hasOne = [];
		 public $hasMany = [];
		 public $belongsTo = [];
		 public $belongsToMany = [];
		 public $morphTo = [];
		 public $morphOne = [];
		 public $morphMany = [];
		 public $attachOne = [];
		 public $attachMany = [];
}
