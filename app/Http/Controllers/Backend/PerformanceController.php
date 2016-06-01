<?php namespace App\Http\Controllers\Backend;

use \App\Http\Controllers\Controller;
use \App\Performance;
use \App\Http\Requests\PerformanceForm;

class PerformanceController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the Performance page.
	 *
	 * @return Response
	 */
	public function index()
	{
		$arrPerformance = Performance::all();
	    return view('backend.performance.list', ['arrData' => $arrPerformance]);
	}

	/**
	 * Show the Performance page.
	 *
	 * @return Response
	 */
	public function anyEdit($id, Performance $Performance, PerformanceForm $PerformanceForm)
	{
		$form = Performance::findOrFail($id);
// var_dump(\Request::method());
// dd(1);
		if (\Request::method() == 'POST') {
			$form->fill(\Request::all());
			$form->save();
			return redirect()->route('performance')
            ->with('message', 'Edit Successfull!');
		}
	    return view('backend.performance.edit',
	    	[
	    		'id' => $id,
	    		'form' => $form
	    	]
	    	);
	}

	/**
	 * Show the Performance page.
	 *
	 * @return Response
	 */
	public function anyAdd(Performance $Performance, PerformanceForm $PerformanceForm)
	{
		if (\Request::method() == 'POST') {
			$Performance->fill(\Request::all());
			$Performance->save();
			return redirect()->route('performance')
            ->with('message', 'Add Successfull!');
		}
	    return view('backend.performance.add');
	}

	/**
	 * Show the Performance page.
	 *
	 * @return Response
	 */
	public function delete($id, Performance $Performance, PerformanceForm $PerformanceForm)
	{
		$Performance = Performance::findOrFail($id);
		$Performance->delete();
	    return redirect()->route('performance')
            ->with('message', 'Delete Successfull!');
	}
}
