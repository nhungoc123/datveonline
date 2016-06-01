<?php namespace App\Http\Controllers\Backend;

use \App\Http\Controllers\Controller;
use \App\Screen;
use \App\Http\Requests\ScreenForm;

class ScreenController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the Screen page.
     *
     * @return Response
     */
    public function index()
    {
        $arrScreen = Screen::all();
        return view('backend.screen.list', ['arrData' => $arrScreen]);
    }

    /**
     * Show the Screen page.
     *
     * @return Response
     */
    public function anyEdit($id, Screen $Screen, ScreenForm $ScreenForm)
    {
        $form = Screen::findOrFail($id);

        if (\Request::method() == 'POST') {
            $form->fill(\Request::all());
            $form->save();
            return redirect()->route('screen')
            ->with('message', 'Edit Successfull!');
        }
        return view('backend.screen.edit',
            [
                'id' => $id,
                'form' => $form
            ]
            );
    }

    /**
     * Show the Screen page.
     *
     * @return Response
     */
    public function anyAdd(Screen $Screen, ScreenForm $ScreenForm)
    {
        if (\Request::method() == 'POST') {
            $Screen->fill(\Request::all());
            $Screen->save();
            return redirect()->route('screen')
            ->with('message', 'Add Successfull!');
        }
        return view('backend.screen.add');
    }

    /**
     * Show the Screen page.
     *
     * @return Response
     */
    public function delete($id, Screen $Screen, ScreenForm $ScreenForm)
    {
        $Screen = Screen::findOrFail($id);
        $Screen->delete();
        return redirect()->route('screen')
            ->with('message', 'Delete Successfull!');
    }
}
