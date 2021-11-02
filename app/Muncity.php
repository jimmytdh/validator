<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muncity extends Model
{
    protected $connection = 'philippines';
    protected $table = 'refcitymun';
    protected $fillable = ['vimsCode'];
    public $timestamps = false;
}
