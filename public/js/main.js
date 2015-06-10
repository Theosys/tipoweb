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
	vm.generos = ['TODOS', 'HOMBRE', 'MUJER'];
	vm.colecciones = ['uno', 'dos', 'tres'];
	vm.colores = ['rojo', 'verde', 'azul'];
	vm.categorias = ['efdds', 'sdf', 'asdasd', 'sfsdf', 'asdas'];

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
			for(var ele in data) {
				vm.colecciones.push(ele.coleccion);
			}
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	angular.element(document).ready(function () {
        vm.getDestacados();
    });

}]);