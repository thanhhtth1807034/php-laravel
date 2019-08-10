<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
//    protected $connection = "hello-postgres";

    protected $fillable = [
        'name', 'category', 'price','thumbnail'
    ];
}
