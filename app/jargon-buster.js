$(document).ready(function () {

    $("#fca-app-wrap").append("<div id='fca-app'>Loading Jargon Buster </div>");	  

    $("head").append('<link rel="stylesheet" type="text/css" href="styles/main.css">');   
    $("head").append("<script src='bower_components/angular/angular.js'></script>");
  	$("head").append("<script src='bower_components/angular-resource/angular-resource.js'></script>");
  	$("head").append("<script src='bower_components/angular-cookies/angular-cookies.js'></script>");
   
    $("head").append("<script src='bower_components/angular-sanitize/angular-sanitize.js'></script>");
    $("head").append("<script src='bower_components/angular-route/angular-route.js'></script>");
    $("head").append("<script src='scripts/app.js'></script>");
    $("head").append("<script src='scripts/services.js'></script>");
    $("head").append("<script src='scripts/controllers/main.js'></script>");

})
