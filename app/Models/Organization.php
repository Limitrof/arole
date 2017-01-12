<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Organization extends Model
{
    use CrudTrait;
   // use Dimsav\Translatable\Translatable;

    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
    protected $table = 'organizations';
/*    public $translatedAttributes = ['title'];
    public $translationModel = 'App\Models\OrganizationTranslation';*/
    protected $primaryKey = 'id';
    protected $fillable = ['logo','descr','photo','phone','address','email','geo','worktime','user_id'];

    //protected $table = 'organizations';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
    public function User()
    {
        return $this->belongsTo('App\User');
    }
    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
