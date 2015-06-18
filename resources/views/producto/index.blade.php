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
			<h2 class="container-1-subtitle">COLECCIONES</h2>
			<p  class="item-2" ng-repeat="item in vm.colecciones"><%item.coleccion%></p>			
		</div>
		<div class="container-1-sub">
			<h2 class="container-1-subtitle">COLOR</h2>
			<p  class="item-2" ng-repeat="item in vm.colores"><%item.color%></p>
		</div>
		<div class="container-1-sub">
			<h2 class="container-1-subtitle">CATEGORIAS</h2>
			<div ng-repeat="item in vm.categorias">
				<input type="checkbox"><%item.categoria%></input>
			</div>
		</div>
	</div>
</div>
<div class="inline article-right">
	@foreach($productos as $item)
		<div class="container1-product inline">
			<a href="" ng-click="vm.getProductoByid({{$item->id}})">
				<img class="thumbnail1-product" src="{{ $item->url_imagen }}" alt="">
				<div class="triangle">
				</div>
				<div class="content-triangle">
					<img class="article-logo" src="/images/logo-white.svg">
					<p class="product-details-1">
						<span>Precio:</span><span>{{ $item->precio }}</span>
					</p>
					<p class="product-details-2">
						<span>Modelo:</span><span>{{ $item->nombre }}</span>
					</p>
					
				</div>
			</a>
		</div>
	@endforeach
	<p>
		{!! link_to ('products/create', 'Agregar producto') !!}
	</p>		
</div>


