<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class BasedocumentaireItem extends Model
{
    protected $fillable = [
        'name',
        'content',
        'status',
        'seo_title',
        'seo_meta_description',
        'created_at',
        'updated_at'
    ];

}
