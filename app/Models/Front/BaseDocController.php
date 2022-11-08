<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class BaseDocController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $base_doc = DB::table('page_base_doc_items')->where('id', 1)->first();
        return view('pages.base_doc', compact('base_doc','g_setting'));
    }
}
