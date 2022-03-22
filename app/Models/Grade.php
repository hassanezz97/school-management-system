<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Grade extends Model
{
    use HasTranslations;

    protected $table = 'Grades';
    protected $fillable =['Name','Notes'];
    public $timestamps = true;
    public $translatable = ['Name'];

    //Grade relations to get their sections

    public function Sections()
    {
        return $this->hasMany('App\Models\Section', 'Grade_id');
    }
}
