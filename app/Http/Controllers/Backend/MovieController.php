<?php namespace App\Http\Controllers\Backend;

use \App\Http\Controllers\Controller;
use \App\Movie;
use \App\Http\Requests\MovieForm;

class MovieController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the movie page.
	 *
	 * @return Response
	 */
	public function index()
	{
		$arrMovie = Movie::all();
	    return view('backend.movie.list', ['arrMovie' => $arrMovie]);
	}

	/**
	 * Show the movie page.
	 *
	 * @return Response
	 */
	public function anyEdit($id, Movie $movie, MovieForm $MovieForm)
	{
		$form = Movie::find($id);

		if (\Request::method() == 'POST') {
			$form->fill(\Request::all());
			$form->save();
			return redirect()->route('movie')
            ->with('flg', 'Successfull!');
		}
	    return view('backend.movie.edit',
	    	[
	    		'id' => $id,
	    		'form' => $form
	    	]
	    	);
	}

	/**
	 * Show the movie page.
	 *
	 * @return Response
	 */
	public function anyAdd(Movie $movie, MovieForm $MovieForm)
	{
		if (\Request::method() == 'POST') {
			$movie->fill(\Request::all());
			$movie->save();
			return redirect()->route('movie')
            ->with('flg', 'Successfull!');
		}
		// dd($request);
		// if ($request->isMethod('post')) {

		// }
	    return view('backend.movie.add');
	}
}
