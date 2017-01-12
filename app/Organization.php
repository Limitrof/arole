<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Organization extends Model
{
    use Translatable;

    protected $table = 'organizations';
    public $translatedAttributes = ['title'];
    public $translationModel = 'App\OrganizationTranslation';
    protected $primaryKey = 'id';
    protected $fillable = ['logo','title_trans','descr','photo','phone','address','email','geo','worktime','user_id'];

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
    
}
