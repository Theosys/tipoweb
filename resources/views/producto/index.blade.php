@if(Session::has('notice'))
   	<p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
@foreach($productos as $item)
	<a href="" ng-click="vm.getProductoByid({{$item->id}})">
		<div class="container pro_thumb_con">
			<img class="producto_thumb" src="{{ $item->url_imagen }}" alt="">
		</div>
	</a>
@endforeach
<p>
	{!! link_to ('products/create', 'Agregar producto') !!}
</p>

