<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class My_Parent extends Model
{
    use HasTranslations;
    protected $table = 'my__parents';
    protected $guarded=[];
    public $translatable = ['Name_Father','Job_Father','Name_Mother','Job_Mother'];

}
