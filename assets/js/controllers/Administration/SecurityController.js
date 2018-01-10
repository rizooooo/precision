// SecurityController.js
define(['jquery', 'bootstrapjs', 'security_module'], function ($, bootstrapjs, security_module) {

    var app = angular.module('securityModule', []);
    app.controller('SecurityController', function ($scope, $http, $timeout) {
	  	$scope.test = 'working';
	  	security_module.initialize_security_table($scope, $http);
    });




});