<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class Ea_bqmandataires extends Model
{
    protected $fillable = [
        'id_bq',
        'NbresCltsAffectes',
        'NbresCltsPayes',
        'TotalMttPaye'
    ];

}
