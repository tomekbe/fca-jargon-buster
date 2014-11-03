/*global $:false */
'use strict';
// factory services

angular.module('jargonBuster.dictionaryService',[]).factory('dictionaryService',function($http){

	var factory = {};
	factory.getDictionary = function() {
      return $http({
        method:'JSONP',
        url:'http://view-it.co.uk/services/fca/jargon_buster.php?callback=JSON_CALLBACK'
      });
    };

  return factory;

});

//directives

angular.module('jargonBuster.directives',[]).
	directive('slownik', function() {
		return {
			restrict:'E',
			link: function (scope,element,attrs) {
				var w =  $(element).find('.word');
				var ar = $(element).find('.arrow');
				var d =  $(element).find('.definition');
				
				// when the word is clicked, show or hide the definition
				w.bind('click', function() {
					
					$(d).toggle('fast', function() { });
					
				
					if(($(ar).attr('class'))==='arrow arrow-unexpanded') {
						$(ar).removeClass( 'arrow-unexpanded' ).addClass('arrow-expanded');
					} else if(($(ar).attr('class'))==='arrow arrow-expanded')  {
						$(ar).removeClass( 'arrow-expanded' ).addClass('arrow-unexpanded');
					}
				});
			},
			template:'<div class="word"><span class="arrow arrow-unexpanded"></span><span>{{item.word | makeUppercase}}</span></div><div class="definition" ng-bind-html="item.definition" ></div>',

		};
	}).directive ('guzik', function () {
		return {
			restrict: 'E',
			replace: true,
			scope: {
				info: '=',
			},
			link: { pre:function(scope,element,attrs) {
					//console.log(scope.info.state +"dd")
					if(scope.info.state!=='jb-disabled') {
						// wipe everythign firts 
						element.bind('click',
							function(){

								scope.$parent.$apply(
                                function() {
                                	scope.$parent.query=scope.info.letter;
                                	//scope.$parent.noterms = false;
                                }

					  );});
         			 }
         			 //attempt to click the disabled button

         			 if(scope.info.state==='jb-disabled') {

         				element.bind ('click', function() {
         				
         						scope.$parent.$apply(
                                function() {
                                	scope.$parent.query=scope.info.letter;
									//scope.$parent.noterms = true;
                                }

					  );
         				})
         			 }


        }, post: function(scope,element) {
				if(scope.info.state!=='jb-disabled') {
				

				}
			}
		},
			template:'<button ng-class="info.state">{{info.letter}}</button>'
		};
	});




//filters

angular.module('jargonBuster.customFilters',[])
	.filter('makeUppercase', function () {
		return function (item) {
			return item.toUpperCase();
    };

  })
.filter('MyFilter', function() {
        return function(list, propertyName, value) {
        // check if any value exists at all first
          if(value&&list) {
            //* * * * * * * * * * * * * * * * * *//
            //*     querying by a string         //
            //* * * * * * * * * * * * * * * * * *//
            if(value.length>1){

              var newList = [];

              var lower = value.toLowerCase();
		   
 
              angular.forEach(list, function(v) {
		            if (v[propertyName].toLowerCase().indexOf(lower) >= 0) {
                      newList.push(v);
                    } 

               	});
				
              if (lower==='index') {
                angular.forEach(list, function(v) {
                  newList.push(v);
                });
              }

             //
             if (newList.length===0) {
             	// if the list is empty update a scope about it 
             	// 'this' refers to the scope
				 this.noterms = true;
			 } else if(newList.length>0) {
			 	this.noterms = false;
			 }
              return newList;
            }
            ///* * * * * * * * * * * * * * * * * * //
			//*  querying by a single letter       //
			//* * * * * * * * * * * * * * * * * * //
            else if (value.length===1)

			{
              var filtered = [];
              var letterMatch = new RegExp(value, 'i');
			      

              for (var i = 0; i < list.length; i++) {
                var item = list[i];
                if (letterMatch.test(item.word.substring(0, 1))) {
                  filtered.push(item);
                 
                }
              }
              // no matches 0
              if (filtered.length===0) {
             	// if the list is empty update a scope about it 
             	// 'this' refers to the scopex
				 this.noterms = true;
			 } else if(filtered.length>0) {
			 	this.noterms = false;
			 }
              return filtered;
			      


            }
          } 
           //* * * * * * * * * * * * * * * * * *//
            //*     if there is no s         //
            //* * * * * * * * * * * * * * * * * *//
          else if(value.length===0) {

          		this.noterms = true;
          }
             //the end of if value

        
        };
      });
