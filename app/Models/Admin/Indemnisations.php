<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class Indemnisations extends Model
{
    protected $fillable = [

        'numero',
        'id_liquidateur',
        'id_bq',
        'statut',
        'descpt',
        'periode0',
        'periode1',
        'periode2',


    ];

}
