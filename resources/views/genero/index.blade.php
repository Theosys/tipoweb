@extends('app')

@section('content')
<h1>Administrar Generos</h1>
<table>
	<thead>
		<th>
			<div>
				ID
			</div>
		</th>
		<th>
			<div>
				GENERO
			</div>
		</th>
		<th>
			<div>
				ACCIONES
			</div>
		</th>
	</thead>
	<tbody>
		<tr ng-repeat="item in vm.generos">
			<td>
				<div><%item.id%></div>
			</td>
			<td>
				<div>
					<input type="text" ng-model="item.genero">
				</div>
			</td>
			<td>
				<div>
					<span ng-click="vm.editarGenero(item.id, item.genero)">
						Editar
					</span>
					<span ng-click="vm.deleteGenero(item.id)">
						Eliminar
					</span>
				</div>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<td>
			<div>
				<input type="text" ng-model="vm.genero_nuevo">
			</div>
		</td>
		<td ng-click="vm.agregarGenero()">
			<div>
				Agregar...
			</div>
		</td>
	</tfoot>
</table>

@endsection
