@extends('app')

@section('content')
<h1>Administrar Categorias</h1>
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
		<tr ng-repeat="item in vm.categorias">
			<td>
				<div><%item.id%></div>
			</td>
			<td>
				<div>
					<input type="text" ng-model="item.categoria">
				</div>
			</td>
			<td>
				<div>
					<span ng-click="vm.editarCategoria(item.id, item.categoria)">
						Editar
					</span>
					<span ng-click="vm.deleteCategoria(item.id)">
						Eliminar
					</span>
				</div>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<td>
			<div>
				<input type="text" ng-model="vm.categoria_nueva">
			</div>
		</td>
		<td ng-click="vm.agregarCategoria()">
			<div>
				Agregar...
			</div>
		</td>
	</tfoot>
</table>

@endsection
