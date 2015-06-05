@extends('app')

@section('content')
	<h1> Guardar usuario </h1>

	{!! Form::open(array('url' => 'products/' . $producto->id)) !!}
		@if($producto->id)
   			{!! Form::hidden('_method', 'put'); !!}
   		@endif
    	{!! Form::label('nombre', 'Nombre:'); !!}
    	{!! Form::text('nombre'); !!}
    	</br>
		{!! Form::label('descripcion', 'Descripcion:'); !!}
    	{!! Form::text('descripcion'); !!}
    	</br>
		{!! Form::label('genero', 'Genero:'); !!}
    	{!! Form::text('genero'); !!}
    	</br>
		{!! Form::label('categoria', 'Categoria:'); !!}
    	{!! Form::text('categoria'); !!}
    	</br>
		{!! Form::label('coleccion', 'Coleccion:'); !!}
    	{!! Form::text('coleccion'); !!}
    	</br>
		{!! Form::label('talla', 'Talla:'); !!}
    	{!! Form::text('talla'); !!}
    	</br>
		{!! Form::label('color', 'Color:'); !!}
    	{!! Form::text('color'); !!}
    	</br>
		{!! Form::label('precio', 'Precio:'); !!}
    	{!! Form::text('precio'); !!}
    	</br>
		{!! Form::label('url_imagen', 'Imagen:'); !!}
    	{!! Form::text('url_imagen'); !!}
    	</br>
		{!! Form::submit('Guardar Producto'); !!}
    	<a href="{{ url('/products') }}">Cancelar</a> 
	{!! Form::close() !!}

@endsection
