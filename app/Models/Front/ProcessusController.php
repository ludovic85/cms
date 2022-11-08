<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use function view;

class ProcessusController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $processus = DB::table('page_processus_items')->where('id', 1)->first();
       // $project_items = DB::table('projects')->paginate(9);
       return view('pages.processus', compact('processus','g_setting',));
        //return view('pages.processus', compact('processus','g_setting','project_items'));
    }

  /*  public function detail($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $project_detail = DB::table('projects')->where('project_slug', $slug)->first();
        $project_items = DB::table('projects')->get();
        if(!$project_detail) {
            return abort(404);
        }

        $project_photos = DB::table('project_photos')->where('project_id', $project_detail->id)->get();

        return view('pages.project_detail', compact('g_setting','project_detail','project_items','project_photos'));
    } */
}
