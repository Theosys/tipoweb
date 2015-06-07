<div class="container2-product inline">
	<h1>Online</h1>
	<div class="product-left inline">
		<h2>{{$item->nombre}}</h2>
		<p>{{$item->coleccion}}</p>
		<div class="product-price block">
			<span class="product-price-data price-data-number">{{$item->precio}}</span>
			<span class="product-price-data price-data-den">Nuevos Soles</span>
			<span class="product-price-data price-data-det">Stock limitado</span>
		</div>
		<span>Cantidad:</span>
		<input type="number">
		<p>{{$item->talla}}</p>
		<span class="product-tag inline">{{$item->categoria}}</span>
		<span class="product-tag inline">{{$item->genero}}</span>
	</div>
	<div class="product-right inline">
		<img class="image1-product" src="{{$item->url_imagen}}" alt="">
		<a class="button1 block" href="#">Llevame!</a>
	</div>
</div>
<div class="aside inline">
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