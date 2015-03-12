<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
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
		$gelen = DB::table("gelen_evrak")->select("gelis_tarihi", "gonderen_kurulus", "gonderen_kisi", "konu", "evrak_no")
		->orderBy('gelis_tarihi', 'desc')
		->skip(10)
		->take(10)
		->get();
//		$gelen = DB::table("gelen_evrak")->skip(10)->take(10)->get();
//		$gelen = DB::select('SELECT DATE_FORMAT(gelis_tarihi, '%d-%m-%Y') AS gtarih, gonderen_kurulus, gonderen_kisi, konu, evrak_no FROM gelen_evrak);
        return View::make("layouts.evraklistesi")->with('gelenler', $gelen);
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
