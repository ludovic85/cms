<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function session;

class BaseController extends Controller
{

    public function AddCommonContent()
    {
        date_default_timezone_set('Africa/Libreville');

        setlocale(LC_TIME, 'fr_FR','French');

		$languages = DB::table('languages')->where('is_default','1')->get();


		$allLanguages = DB::table('languages')->get();

		if(empty(Session::get('languages_id'))){
			session(['languages_id' => $languages[0]->languages_id]);
		}

        $result = array();

        $result['languages'] = $allLanguages;

        return $result ;

    }
}
