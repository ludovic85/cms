<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Actualites extends Model
{
    protected $fillable = [
        'category_id',
        'actualites_title',
        'actualites_slug',
        'actualites_content',
        'actualites_content_short',
        'actualites_img',
        'seo_title',
        'seo_meta_description'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category');
    }

}
