<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PageBanqueItem extends Model
{
    protected $fillable = [
        'name',
        'content',
        'status',
        'seo_title',
        'seo_meta_description'
    ];

}