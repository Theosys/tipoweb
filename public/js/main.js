/**
*  Module
*
* Description
*/
angular.module('angularApp', []).

controller('mainController', ['$scope', '$http', '$compile', function($scope, $http, $compile){
  
  var vm = this;

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
		$('#content').html(data);
	})
	.error(function(data){
		alert('Imposible cargar datos');
	})
}

}]);