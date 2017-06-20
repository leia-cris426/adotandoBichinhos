<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'sexo', 'porte', 'idade'
    ];
}
