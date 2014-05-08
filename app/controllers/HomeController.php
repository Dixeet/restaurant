<?php


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
        $jumbotrons = Info::where('name', '=', 'jumbotron')->get();
        $recommandations = Recommandation::with('plat')->get();
        $menus = Menu::all();
//        App::after(function($request, $response)
//        {
//            $queries = DB::getQueryLog();
//        });
		return View::make('index', array(
            'jumbotrons' => $jumbotrons,
            'recommandations' => $recommandations,
            'menus' => $menus
        ));
	}

}
