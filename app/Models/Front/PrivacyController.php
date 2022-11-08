<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class PrivacyController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $privacy = DB::table('page_privacy_items')->where('id', 1)->first();
        return view('pages.privacy', compact('privacy','g_setting'));
    }
}
