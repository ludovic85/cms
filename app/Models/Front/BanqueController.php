<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use App\Models\Admin\etablissementdecredits;
use DB;
use function view;

class BanqueController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $banque = DB::table('page_banque_items')->where('id', 1)->first();
        $etablissementdecredits = etablissementdecredits::all();

        return view('pages.banque', compact('banque','g_setting','etablissementdecredits'));
    }
}
