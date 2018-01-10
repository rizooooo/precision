// SmartController.js
define(['jquery', 'bootstrapjs', 'smart_module'], function ($, bootstrapjs, smart_module) {

    var app = angular.module('smartModule', []);
    app.controller('SmartController', function ($scope, $http, $timeout) {
  	$scope.test = 'working';


    });




});