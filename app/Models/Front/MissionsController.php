<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class MissionsController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
       //  $about = DB::table('page_about_items')->where('id', 1)->first();
        $missions = DB::table('page_missions_items')->where('id', 1)->first();
        return view('pages.missions', compact('missions','g_setting'));
    }
}
