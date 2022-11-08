<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class BasedocumentaireController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $basedocumentaire = DB::table('page_basedocumentaire_items')->where('id', 1)->first();
        return view('pages.basedocumentaire', compact('basedocumentaire','g_setting'));
    }
}
