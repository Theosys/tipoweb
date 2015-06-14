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
		<div class="container-1-sub center">
			<span class="item-1 inline center" ng-repeat="item in vm.generos"><%item.genero%></span>
		</div>
		<div class="container-1-sub">
			<h2>COLECCIONES</h2>
			<p  class="item-1" ng-repeat="item in vm.colecciones"><%item.coleccion%></p>			
		</div>
		<div class="container-1-sub">
			<h2>COLOR</h2>
			<p  class="item-1" ng-repeat="item in vm.colores"><%item%></p>
		</div>
		<div class="container-1-sub">
			<h2>CATEGORIAS</h2>
			<div ng-repeat="item in vm.categorias">
				<input type="checkbox"><%item%></input>
			</div>
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


