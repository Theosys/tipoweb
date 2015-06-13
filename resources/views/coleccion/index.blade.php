@extends('app')

@section('content')

<table>
	<thead>
		<th>ID</th>
		<th>COLECCION</th>
		<th>ACCIONES</th>
	</thead>
	<tbody>
		<tr ng-repeat="item in vm.colecciones">
			<td>
				<div><%item.id%></div>
			</td>
			<td>
				<div><%item.coleccion%></div>
			</td>
			<td>
				<div>
					<span>
						Editar
					</span>
					<span ng-click="vm.deleteColeccion(item.id)">
						Eliminar
					</span>
				</div>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<td ng-click="vm.agregarColeccion()">Agregar...</td>
	</tfoot>
</table>

@endsection
