<?php namespace App\Http\Controllers\Backend;

use \App\Http\Controllers\Controller;
use \App\Seat;
use \App\Screen;
use \App\Http\Requests\SeatForm;
use \App\Http\Requests\ScreenSearchForm;

class SeatController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the Seat page.
     *
     * @return Response
     */
    public function index(ScreenSearchForm $SearchForm)
    {
        $arrScreen = Screen::all();
        $screen = \Request::get('screen', null);

        $arrScreen = \Helper::convertToKeyValue($arrScreen->toArray());

        $arrData = [];
        if (\Request::method() == 'POST') {
            if (\Request::get('mode') == 'search') {
                $arrData = Screen::findOrFail($screen)->seat()->select();
            }
        }

        return view('backend.seat.index', ['arrScreen' => $arrScreen, 'screen' => $screen, 'arrData' => $arrData]);
    }

    public function ajaxGetSeat($screen, Illuminate\Http\Request $request)
    {
        $objScreen = Screen::findOrFail($screen);

        $arrData = $objScreen->seat()->select();
        $status = true;
        if (is_null($arrData)) {
            $status = false;
            return \Response::json(['status' => $status]);
        }

        return \Response::json(['status' => $status, 'data' => $arrData]);
    }
}
