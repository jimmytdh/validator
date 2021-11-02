<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $connection = 'philippines';
    protected $table = 'refprovince';
    protected $fillable = ['vimsCode'];
    public $timestamps = false;
}
