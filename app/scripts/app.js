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
  .config(function ($routeProvider,$locationProvider) {

   
    var site_prefix ='/preview/fca/jb-easy/app';

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


setTimeout(function() {
      var all = window.document.getElementById('fca-app');
      var body = window.document.getElementById('fca-app-wrap');
      all.setAttribute('ng-view','');
      angular.bootstrap(body, ['jargonBuster']);
 

    }, 2500);