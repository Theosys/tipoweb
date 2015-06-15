@extends('app')

@section('content')

<h1>Administrar Colores</h1>
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
		<tr ng-repeat="item in vm.colores">
			<td>
				<div><%item.id%></div>
			</td>
			<td>
				<div>
					<input type="text" ng-model="item.color">
				</div>
			</td>
			<td>
				<div>
					<span ng-click="vm.editarColor(item.id, item.color)">
						Editar
					</span>
					<span ng-click="vm.deleteColor(item.id)">
						Eliminar
					</span>
				</div>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<td>
			<div>
				<input type="text" ng-model="vm.color_nuevo">
			</div>
		</td>
		<td ng-click="vm.agregarColor()">
			<div>
				Agregar...
			</div>
		</td>
	</tfoot>
</table>

@endsection
