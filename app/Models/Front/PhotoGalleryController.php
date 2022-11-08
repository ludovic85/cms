<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $photo_gallery = DB::table('page_photo_gallery_items')->where('id', 1)->first();
        $photos = DB::table('photos')->orderby('photo_order', 'asc')->get();
        return view('pages.photo_gallery', compact('photo_gallery','g_setting','photos'));
    }
}
