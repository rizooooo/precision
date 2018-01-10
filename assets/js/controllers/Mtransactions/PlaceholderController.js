// PlaceholderController.js
define(['jquery', 'bootstrapjs', 'placeholder_module'], function ($, bootstrapjs, placeholder_module) {

    var app = angular.module('placeholderModule', []);
    app.controller('PlaceHolderController', function ($scope, $http, $timeout) {
  	$scope.test = 'working';


    });




});