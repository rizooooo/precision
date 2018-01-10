// MaintenanceController.js
define(['jquery', 'bootstrapjs', 'maintenance_module'], function ($, bootstrapjs, maintenance_module) {

    var app = angular.module('maintenanceModule', []);
    app.controller('MaintenanceController', function ($scope, $http, $timeout) {
  	$scope.test = 'working';


    });




});