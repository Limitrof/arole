<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationTranslation extends Model
{
    protected $table = 'organization_translations';
    public $timestamps = false;
    protected $fillable = ['title'];

}
