<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
        'id',
        'category',
        'unique_person_id',
        'pwd',
        'indigenous_member',
        'last_name',
        'first_name',
        'middle_name',
        'suffix',
        'contact_no',
        'region',
        'province',
        'muncity',
        'brgy',
        'sex',
        'birthdate',
        'status',
        'date_submitted',
    ];
}
