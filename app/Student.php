<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'name',
        'roll',
        'semester',
        'shift'
    ];


    public function semesterSelect($value)
    {

        if($this->semester==$value){
            return 'selected';
        }

    }

    public function shiftSelect($value)
    {

        if($this->shift==$value){
            return 'selected';
        }

    }
}
