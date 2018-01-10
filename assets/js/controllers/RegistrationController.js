// AdhocController.js
define(['jquery', 'bootstrapjs', 'registration_module'], function($, bootstrapjs, registration_module) {

    var app = angular.module('registrationModule', []);
    app.controller('RegistrationController', function($scope, $http, $timeout) {
        
        $scope.test = 'working';
        registration_module.showAllQuestions($scope, $http);
        registration_module.initialize_validation();


        $('#Q1').on('change', function() {
            $('#question_1').val($("#Q1 option:selected").text());
            $($('#Q1')).parent().closest('div').removeClass('has-error'); 
        });
        $('#Q2').on('change', function() {
            $('#question_2').val($("#Q2 option:selected").text());
            $($('#Q2')).parent().closest('div').removeClass('has-error'); 
        });
        $('#Q3').on('change', function() {
            $('#question_3').val($("#Q3 option:selected").text());
            $($('#Q3')).parent().closest('div').removeClass('has-error'); 
        });
        $('#Q4').on('change', function() {
            $('#question_4').val($("#Q4 option:selected").text());
            $($('#Q4')).parent().closest('div').removeClass('has-error'); 
        });
        $('#Q5').on('change', function() {
            $('#question_5').val($("#Q5 option:selected").text());
            $($('#Q5')).parent().closest('div').removeClass('has-error'); 
        });
    });




});