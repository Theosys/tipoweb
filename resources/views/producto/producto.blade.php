@extends('app')

@section('content')
		<div class="container datos_producto">
			<h1>Online</h1>
			<div class="detalles_producto">
				<h2>{{$item->nombre}}</h2>
				<p>{{$item->coleccion}}</p>
				<div class="campo_precio">
					<span class="precio_numero">{{$item->precio}}</span>
					<span class="precio_denominacion">Nuevos Soles</span>
					<span class="precio_detalle">Stock limitado</span>
				</div>
				<span>Cantidad:</span>
				<input type="number">
				<p>{{$item->talla}}</p>
				<span class="dato_pro">{{$item->categoria}}</span>
				<span class="dato_pro">{{$item->genero}}</span>
			</div>
			<div class="img_producto">
				<img src="{{$item->url_imagen}}" alt="">
				<button><a href="#">Llevame!</a></button>
			</div>
		</div>
		<div class="art_rel">
			<p>{!! link_to('products/'.$item->id.'/edit', 'Editar') !!}</p>
			<p>
			   {!! Form::open(array('url' => 'products/'.$item->id)) !!}
			      {!! Form::hidden("_method", "DELETE") !!}
			      {!! Form::submit("Eliminar") !!}
			   {!! Form::close() !!}
			</p>
			<h3>Articulos relacionados:</h3>
			<div>
				Esta seccion se cargara con angular y ajax con los articulos relacionados del actualmente mostrado;.
			</div>
		</div>
@endsection
