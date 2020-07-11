<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'phn',
        'address',
        'shift',
    ];
    public function select($value)
    {
        return $this->shift == $value ? 'Selected' : '';
    }
}
