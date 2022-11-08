<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PagePresentationItem extends Model
{
    protected $fillable = [
        'name',
        'content',
        'status',
        'seo_title',
        'seo_meta_description'
    ];

}