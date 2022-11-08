<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class CurativeController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
       //  $about = DB::table('page_about_items')->where('id', 1)->first();
        $curative = DB::table('page_curative_items')->where('id', 1)->first();
        return view('pages.curative', compact('curative','g_setting'));
    }
}
