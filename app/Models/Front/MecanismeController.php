<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class MecanismeController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $mecanisme = DB::table('page_mecanisme_items')->where('id', 1)->first();
        return view('pages.mecanisme', compact('mecanisme','g_setting'));
    }
}
