<?php namespace App\Http\Controllers\Backend;

use \App\Http\Controllers\Controller;
use \App\Screen;
use \App\Seat;
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
        var_dump($arrScreen[0]->seat()->first()->type);
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
            $old_seat_in_row = $form->seat_in_row;
            $old_total_seat = $form->total_seat;
            $form->fill(\Request::all());
            $form->save();
            
        if ($old_seat_in_row != $form->seat_in_row && $old_total_seat != $form->total_seat) {
            // remove old seat
            $form->seat()->detele();

            $this->createSeat($form);
        }

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

    public function createSeat(Screen &$Screen)
    {
        $arrData = ['cinemas_id' => $Screen->id];
        $column = $Screen->seat_in_row;
        $row = $form->total_seat/$column;
        $datas = [];
        for ($i=1; $i <= (int)$row; $i++) {
            for ($j=1; $j <= $column; $j++) {
                $arrData['row'] = $i;
                $arrData['column'] = $j;
                $datas[] = new Seat($arrData);
                // $Screen->seat()->fill($arrData);
            }
        }
        $Screen->seat()->save($data);
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

            $this->createSeat($Screen);

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
        $Screen->seat()->detach();
        $Screen->delete();
        return redirect()->route('screen')
            ->with('message', 'Delete Successfull!');
    }
}
