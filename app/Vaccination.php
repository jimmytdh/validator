<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $fillable = [
        'person_id',
        'vaccination_date',
        'manufacturer',
        'batch_no',
        'lot_no',
        'vaccinator',
        'dose1',
        'dose2',
    ];
}
