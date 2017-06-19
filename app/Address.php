<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lograduro', 'bairro', 'num', 'cidade',
    ];

    
}
