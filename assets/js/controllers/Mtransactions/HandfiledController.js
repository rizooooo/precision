// HandfiledController.js
define(['jquery', 'bootstrapjs', 'handfiled_module'], function ($, bootstrapjs, handfiled_module) {

    var app = angular.module('handfiledModule', []);
    app.controller('HandfiledController', function ($scope, $http, $timeout) {
  	$scope.test = 'working';


    });




});
