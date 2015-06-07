@if(Session::has('notice'))
   	<p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
@foreach($productos as $item)
	<a href="" ng-click="vm.getProductoByid({{$item->id}})">
		<div class="container1-product inline">
			<img class="thumbnail1-product" src="{{ $item->url_imagen }}" alt="">
		</div>
	</a>
@endforeach
<p>
	{!! link_to ('products/create', 'Agregar producto') !!}
</p>

