<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class OrganisationController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
       //  $about = DB::table('page_about_items')->where('id', 1)->first();
        $organisation = DB::table('page_organisation_items')->where('id', 1)->first();
        return view('pages.organisation', compact('organisation','g_setting'));
    }
}
