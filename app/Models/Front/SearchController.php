<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use function abort;
use function view;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->method() == 'GET')
        {
            return abort(404);
        }

        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $search_string = $request->search_string;
        $search_string_filter = '%'.$search_string.'%';

        $blog_items = DB::table('blogs')->orderby('id', 'desc')->where('blog_title','like',$search_string_filter)->orWhere('blog_content','like',$search_string_filter)->get();
        $blog_items_no_pagi = DB::table('blogs')->orderby('id', 'desc')->get();
        $categories = DB::table('categories')->get();

        return view('pages.search_result', compact('g_setting','search_string','categories','blog_items_no_pagi','blog_items'));
    }
}
