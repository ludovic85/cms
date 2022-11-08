<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function view;

//class HomeController extends BaseController
class HomeController extends Controller
{
    public function index( Request $request)
    {
		//$commonContent = $this->AddCommonContent();
		//$languages =  $commonContent['languages'];

    	$sliders = DB::table('sliders')->get();
    	$page_home = DB::table('page_home_items')->where('id',1)->first();
    	$why_choose_items = DB::table('why_choose_items')->get();
    	$services = DB::table('services')->get();
    	$testimonials = DB::table('testimonials')->get();
    	$projects = DB::table('projects')->get();
    	$team_members = DB::table('team_members')->get();
    	$blogs = DB::table('blogs')->get();

			 return view('pages.index', compact('sliders','page_home','why_choose_items','services', 'testimonials','projects','team_members','blogs'));
    }


}
