<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class etablissementdecredits extends Model
{
    protected $fillable = [
        'raison_sociale',
        'slug',
        'telephone',
        'email',
        'typeEts',
        'adresse',
        'pays',
        'description',
        'logo',
        'statut',
        'seo_title',
        'seo_description'
    ];

}
