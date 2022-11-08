<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function abort;
use function view;

class PageController extends Controller
{
    public function detail($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $dynamic_page_detail = DB::table('dynamic_pages')->where('dynamic_page_slug', $slug)->first();
        if(!$dynamic_page_detail) {
            return abort(404);
        }
        return view('pages.dynamic_page', compact('g_setting','dynamic_page_detail'));
    }
}
