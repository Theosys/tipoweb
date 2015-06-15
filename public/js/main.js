/**
*  Module
*
* Description
*/
app = angular.module('angularApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }).

controller('mainController', ['$scope', '$http', '$compile', function($scope, $http, $compile){
  
	var vm = this;
	vm.destacados = [];
	vm.generos = [];
	vm.colecciones = [];
	vm.colores = [];
	vm.categorias = [];

	vm.getHome = function () {
		$http.get('/inicio')
		.success(function(data){
			$('#content').html($compile(data)($scope));
		})
		.error(function(data){
			alert('Imposible cargar datos');
		});
	}

	vm.getProductos = function () {
		$http.get('/products')
		.success(function(data){
			$('#content').html($compile(data)($scope));
		})
		.error(function(data){
			alert('Imposible cargar datos');
		});
	}

	vm.getProductoByid = function (id) {
		$http.get('/products/' + id)
		.success(function(data){
			$('#content').html($compile(data)($scope));
		})
		.error(function(data){
			alert('Imposible cargar datos');
		})
	}

	vm.getDestacados = function () {
		$http.get('/products/destacados')
		.success(function (data) {
			vm.destacados = data.slice(0,6);
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	





	vm.getColecciones = function () {
		$http.get('/coleccions')
		.success(function (data) {
			vm.colecciones = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.agregarColeccion = function () {
		data = {
			'nombre': vm.coleccion_nueva
		}
		$http.post('/coleccions', data)
		.success(function (data) {
			console.log(data);
			vm.colecciones = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.editarColeccion = function (id, colec) {
		data = {
			'nombre': colec
		}
		$http.put('/coleccions/' + id, data)
		.success(function (data) {
			vm.colecciones = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.deleteColeccion = function (id) {
		$http.delete('/coleccions/' + id)
		.success(function (data) {
			vm.colecciones = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}







	vm.getGeneros = function () {
		$http.get('/generos')
		.success(function (data) {
			vm.generos = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.agregarGenero = function () {
		data = {
			'genero': vm.genero_nuevo
		}
		$http.post('/generos', data)
		.success(function (data) {
			console.log(data);
			vm.generos = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.editarGenero = function (id, genero) {
		data = {
			'genero': genero
		}
		$http.put('/generos/' + id, data)
		.success(function (data) {
			vm.generos = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.deleteGenero = function (id) {
		$http.delete('/generos/' + id)
		.success(function (data) {
			vm.generos = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}




	

	vm.getCategorias = function () {
		$http.get('/categorias')
		.success(function (data) {
			vm.categorias = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.agregarCategoria = function () {
		data = {
			'categoria': vm.categoria_nueva
		}
		$http.post('/categorias', data)
		.success(function (data) {
			console.log(data);
			vm.categorias = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.editarCategoria = function (id, categoria) {
		data = {
			'categoria': categoria
		}
		$http.put('/categorias/' + id, data)
		.success(function (data) {
			vm.categorias = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.deleteCategoria = function (id) {
		$http.delete('/categorias/' + id)
		.success(function (data) {
			vm.categorias = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}







	vm.getColores = function () {
		$http.get('/colores')
		.success(function (data) {
			vm.colores = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.agregarColor = function () {
		data = {
			'color': vm.color_nuevo
		}
		$http.post('/colores', data)
		.success(function (data) {
			console.log(data);
			vm.colores = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.editarColor = function (id, color) {
		data = {
			'nombre': color
		}
		$http.put('/colores/' + id, data)
		.success(function (data) {
			vm.colores = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.deleteColor = function (id) {
		$http.delete('/colores/' + id)
		.success(function (data) {
			vm.colores = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}





	angular.element(document).ready(function () {
        vm.getDestacados();
        vm.getColecciones();
        vm.getGeneros();
        vm.getColores();
        vm.getCategorias();
    });

}]);