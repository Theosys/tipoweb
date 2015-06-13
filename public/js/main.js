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
	vm.colecciones = [];
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
			vm.colecciones = data;
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	vm.agregarColeccion = function () {
		$http.post('/coleccions')
		.success(function (data) {
			console.log(data);
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

	angular.element(document).ready(function () {
        vm.getDestacados();
        vm.getColecciones();
        //vm.getGeneros();
        //vm.getColores();
        //vm.getCategorias();
    });

}]);