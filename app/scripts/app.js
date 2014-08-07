'use strict';

angular.module('jargonBuster', [
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngRoute',
    'jargonBuster.dictionaryService',
    'jargonBuster.customFilters',
    'jargonBuster.controllers',
    'jargonBuster.directives'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/:id', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
var all = document.getElementById('fca-app');
var body = document.getElementById('fca-app-wrap');

setTimeout(function() {

      all.setAttribute('ng-view','');
      //all.setAttribute('ng-animate',"'slide'");
      angular.bootstrap(body, ['jargonBuster']);
      //document.getElementById('loader').style.display='none';


  }, 500);