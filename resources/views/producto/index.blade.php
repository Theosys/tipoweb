@if(Session::has('notice'))
   	<p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
<div>
	<span class="article-title-2 inline">La Tipografía aplicada al diseño se apodera de la moda urbana</span>
	<span>Buy Online</span>
</div>
<div class="inline article-left">
<h1 class="container-1-title">PRODUCTOS</h1>
	<div class="container-1">
		<div class="container-1-sub">
			<span>TODOS</span>
			<span>HOMBRE</span>
			<span>MUJER</span>
		</div>
		<div class="container-1-sub">
			<h2>COLECCIONES</h2>
			<p>usar ng repeat y ajax</p>
		</div>
		<div class="container-1-sub">
			<h2>COLOR</h2>
			<p>usar ng repeat</p>
		</div>
		<div class="container-1-sub">
			<h2>CATEGORIAS</h2>
			<input type="checkbox">TODOS</input>
		</div>
	</div>
</div>
<div class="inline article-right">
	@foreach($productos as $item)
		<div class="container1-product inline">
			<a href="" ng-click="vm.getProductoByid({{$item->id}})">
			
				<img class="thumbnail1-product" src="{{ $item->url_imagen }}" alt="">
			
			</a>
		</div>
	@endforeach
	<p>
		{!! link_to ('products/create', 'Agregar producto') !!}
	</p>		
</div>


