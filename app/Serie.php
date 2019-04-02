<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        'name',
        'year',
        'director',
        'synopsys',
        'number_of_seasons',
        'poster_url'
    ];
}
