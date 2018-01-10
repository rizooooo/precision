requirejs.config({
	baseUrl: "assets/js",
	paths: {
		recaptcha: ["//www.google.com/recaptcha/api"], //Google Recaptcha
		jquery: ["libs/jquery.min"],
		bootstrapjs: ["libs/bootstrap.min"],
		angular: ["libs/angular.min"]
	   
	},
	shim: {
		bootstrapjs: {
			deps: ["jquery"]
		},
		angular: {
			exports: "angular",
			deps: ["jquery"]
		}
	}
});
var path = window.location.pathname;
require.config({ baseUrl: "http://localhost/precision/assets/js/" });

if (path.toLowerCase() == "/precision/" || path.toLowerCase() == "/precision/login"){
	require(['config', 'jquery', 'recaptcha'], function(){
		//require(['signinCtrl']);
		$('body').css('background-image', 'url(../precision/assets/images/bg_accounting.jpeg)');
		//$(".se-pre-con").fadeOut("slow");
	});
}
else if ((path.toLowerCase()).indexOf('registration') != -1 || (path.toLowerCase()).indexOf('registration/') != -1){
	require(['config', 'jquery', 'recaptcha'], function(){
		
		//require(['signinCtrl']);
		$('body').css('background-image', 'url(../precision/assets/images/bg_accounting.jpeg)');
		//$(".se-pre-con").fadeOut("slow");
	});
} 
else {
	console.log("No scripts");
}

























