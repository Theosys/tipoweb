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
			console.log(vm.destacados[2].url_imagen)
		})
		.error(function (data) {
			alert('Imposible cargar datos');
		})
	}

	angular.element(document).ready(function () {
        vm.getDestacados();
    });

}]);