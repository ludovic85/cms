<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use App;
use Illuminate\Support\Facades\DB;

class language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if(Session::has('locale')){
			$locale = Session::get('locale', Config::get('app.locale'));
		}else{	   
		   $languages = DB::table('languages')->where('is_default','=','1')->get();	   
		   $request->session()->put('direction', $languages[0]->direction);	 	
		   $locale = $languages[0]->code;
		}
		
		App::setLocale($locale);
        return $next($request);
    }
}
