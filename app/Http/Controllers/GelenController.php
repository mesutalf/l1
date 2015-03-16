<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use View;
use DB;

class GelenController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$gelenler = DB::table("gelen_evrak")->select("gelen_evrak_id", "gelis_tarihi", "gonderen_kurulus", "gonderen_kisi", "konu", "evrak_no")
		->orderBy('gelis_tarihi', 'desc')
		->skip(10)
		->take(10)
		->get();
            return View::make("layouts.evraklistesi")->with('gelenler', $gelenler);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
            $gelenEvrak = Input::all();
            return $gelenEvrak;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
            $evrak = DB::table("gelen_evrak")->select("gelis_tarihi", "gonderen_kurulus", "gonderen_kisi", "konu", "evrak_no")
                ->where('gelen_evrak_id','=', $id)
		->first();

            return View::make("layouts.evrakgoster")->with('evrak', $evrak);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
