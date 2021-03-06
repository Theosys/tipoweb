@extends('app')

@section('content')

<h1>Administrar Colecciones</h1>
<table>
	<thead>
		<th>
			<div>
				ID
			</div>
		</th>
		<th>
			<div>
				COLECCION
			</div>
		</th>
		<th>
			<div>
				ACCIONES
			</div>
		</th>
	</thead>
	<tbody>
		<tr ng-repeat="item in vm.colecciones">
			<td>
				<div><%item.id%></div>
			</td>
			<td>
				<div>
					<input type="text" ng-model="item.coleccion">
				</div>
			</td>
			<td>
				<div>
					<span ng-click="vm.editarColeccion(item.id, item.coleccion)">
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
		<td>
			<div>
				<input type="text" ng-model="vm.coleccion_nueva">
			</div>
		</td>
		<td ng-click="vm.agregarColeccion()">
			<div>
				Agregar...
			</div>
		</td>
	</tfoot>
</table>

@endsection
