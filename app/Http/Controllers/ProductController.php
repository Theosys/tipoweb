<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Product;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = Product::all();
		$nombres = '';
   		foreach($productos as $item){
      		$nombres .= $item->nombre . '<br />';
   		}
   		return view('producto.index')->with('productos', $productos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$producto = new Product;
		return view('producto.save')->with('producto', $producto);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$product = new Product();
		$product->nombre = $request->input('nombre');
		$product->descripcion = $request->input('descripcion');
		$product->genero = $request->input('genero');
		$product->categoria = $request->input('categoria');
		$product->coleccion = $request->input('coleccion');
		$product->talla = $request->input('talla');
		$product->color = $request->input('color');
		$product->precio = $request->input('precio');
		$product->url_imagen = $request->input('url_imagen');
		$product->save();

		return redirect('/')->with('notice', 'El producto ha sido creado correctamente.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producto = Product::find($id);
    	return view('producto.producto')->with('item', $producto);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = Product::find($id);
   		return view('producto.save')->with('producto', $producto);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
   		$product = Product::find($id);
		$product->nombre = $request->input('nombre');
		$product->descripcion = $request->input('descripcion');
		$product->genero = $request->input('genero');
		$product->categoria = $request->input('categoria');
		$product->coleccion = $request->input('coleccion');
		$product->talla = $request->input('talla');
		$product->color = $request->input('color');
		$product->precio = $request->input('precio');
		$product->url_imagen = $request->input('url_imagen');
		$product->save();

		return redirect('/')->with('notice', 'El producto ha sido actualizado correctamente.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = Product::find($id);
   		$producto->delete();
   		return redirect('/')->with('notice', 'El producto ha sido eliminado correctamente.');
	}


	/**
	 * Muestra los productos destacados
	 *
	 * @return Response
	 */
	public function destacados()
	{
		$productos = Product::all();
   		return $productos;
	}

}
