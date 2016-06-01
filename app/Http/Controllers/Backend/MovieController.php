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
        $form = Movie::findOrFail($id);

        if (\Request::method() == 'POST') {
            $form->fill(\Request::all());
            $form->save();
            return redirect()->route('movie')
            ->with('message', 'Edit Successfull!');
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
            ->with('message', 'Add Successfull!');
        }
        return view('backend.movie.add');
    }

    /**
     * Show the movie page.
     *
     * @return Response
     */
    public function delete($id, Movie $movie, MovieForm $MovieForm)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('movie')
            ->with('message', 'Delete Successfull!');
    }
}
