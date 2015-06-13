<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Coleccion;

class ColeccionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$coleccions = Coleccion::all();
		return $coleccions;
	}

	/**
	 * Show the form for creating a new resource.
	 * Esta funcion servira para administrar las colecciones
	 * @return Response
	 */
	public function create()
	{
		$coleccions = Coleccion::all();
		return view('coleccion.index')->with('colecciones', $coleccions);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$colec = new Coleccion();
		$colec->coleccion = 'verano';
		$colec->save();
		$coleccions = Coleccion::all();
		return $coleccions;
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
		$colec = Coleccion::find($id);
   		$colec->delete();
   		$coleccions = Coleccion::all();
		return $coleccions;
	}

}
