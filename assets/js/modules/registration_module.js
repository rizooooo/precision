// adhoc_module.js
define([], function() {
    var methods = {};

    methods.showAllQuestions = function($scope, $http) {
        var poller = function() {
            return $http.get('precision/registration/showallquestions').then(function(values) {
                var array = [];
                for (i = 0; i < values.data.length; i++) {
                    array[i] = values.data[i].SecurityQuestion;
                }
                // console.log(values.data[0].SecurityQuestion);  
                // console.log(array);  
                $scope.data = array;
            }, function error(response) {
                console.log(response.statusText);
            });
        }
        poller();
        poller().then(function(data) {
            var html = '';
            var i;
            $scope.data.unshift("Select a Question:");    
            for (i = 0; i < $scope.data.length; i++) {        
                html += '<option value=' + i + '>' + $scope.data[i] + '</option>';    
            }    
            $('#questions').html(html);
            $('#Q1').html($('.template').html());
            $('#Q2').html($('.template').html());
            $('#Q3').html($('.template').html());
            $('#Q4').html($('.template').html());
            $('#Q5').html($('.template').html());

        });

        var arr = ['Q1', 'Q2', 'Q3', 'Q4', 'Q5'];
        // Declare a array where you store the selections
        var arrSelect = {
            'Q1': '0',
            'Q2': '0',
            'Q3': '0',
            'Q4': '0',
            'Q5': '0'
        };

        $('select').on('change', function() {
            var currID = $(this).prop('id');
            // Set the Current selection
            arrSelect[currID] = $(this).val();
            // Iterate Thru each dropdown 
            $.each(arr, function(i) {
                var temp = arrSelect[arr[i]];
                // Clone the template
                var $clone = $('.template').clone();
                // Remove Questions from template based on selected
                // values in other select's
                $.each(arrSelect, function(index, value) {
                    if (value != 0 && value != temp) {
                        $clone.find('option[value=' + value + ']').remove();
                    }
                });
                // If not Current select rewrite its 
                // contents of the select
                if (arr[i] != currID) {
                    //console.log('#' + arr[i] + ' :: ' + $clone.html());
                    $('#' + arr[i]).html('').html($clone.html());
                    $('#' + arr[i]).val(temp);
                }
            });
        });
    }

    methods.initialize_validation = function() {

        $.validator.addMethod('validQuestion', function(value) {
            console.log(value);
            if (value == 0) {
                return false;
            } else {
                return true;
            }
        }, 'Please select a <strong>question</strong>');

        $.validator.addMethod('recaptcha_checked', function(value) {
            console.log(value);

        }, 'Please select a <strong>question</strong>');

        $('#form_step_3').validate({
            ignore: ".ignore",
            rules: {
                Q1: {
                    required: true,
                    validQuestion: true
                },
                Q2: {
                    required: true,
                    validQuestion: true
                },
                Q3: {
                    required: true,
                    validQuestion: true
                },
                Q4: {
                    required: true,
                    validQuestion: true
                },
                Q5: {
                    required: true,
                    validQuestion: true
                },
                answer1: {
                    required: true,
                    validQuestion: true
                },
                answer2: {
                    required: true,
                    validQuestion: true
                },
                answer3: {
                    required: true,
                    validQuestion: true
                },
                answer4: {
                    required: true,
                    validQuestion: true
                },
                answer5: {
                    required: true,
                    validQuestion: true
                },
                hiddenRecaptcha: {
                    required: function() {
                        if (grecaptcha.getResponse() == '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            },
            messages: {

                answer1: {
                    required: "Please Enter your answer # 1 "
                },
                answer2: {
                    required: "Please Enter your answer  # 2 "
                },
                answer3: {
                    required: "Please Enter your answer  # 3 "
                },
                answer4: {
                    required: "Please Enter your answer  # 4 "
                },
                answer5: {
                    required: "Please Enter your answer  # 5 "
                }

            },
            highlight: function(element) {
                $(element).parent().addClass("has-error");
            },
            unhighlight: function(element) {
                $(element).parent().removeClass("has-error");
            }
        });
    }


    return methods;

});