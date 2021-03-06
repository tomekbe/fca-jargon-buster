// factory services
angular.module('jargonBuster.dictionaryService',[]).factory('dictionaryService', function($http){ 

	 var factory = {};
	 factory.getDictionary = function() {
      return $http({
        method: 'JSONP', 
       /* url: 'http://ergast.com/api/f1/2013/driverStandings.json?callback=JSON_CALLBACK' */
        url: 'http://pizg.net/tests/test_jsonp.php?callback=JSON_CALLBACK'
      });
    }

    return factory;

})

//directives

angular.module('jargonBuster.directives',[]).
	directive("slownik", function() {
		return {
			restrict:"AE",
		
			link: function (scope,element,attrs) {


				var w =  $(element).find('.word');
				var ar = $(element).find('.arrow');
				var d =  $(element).find('.definition');
				
				// when the word is clicked, show or hide the definition
				w.bind("click", function() {
					
					$(d).toggle( "fast", function() { });
					
				
					if(($(ar).attr('class'))=="arrow arrow-unexpanded") {
						$(ar).removeClass( "arrow-unexpanded" ).addClass( "arrow-expanded" );
					} else if(($(ar).attr('class'))=="arrow arrow-expanded")  {
						$(ar).removeClass( "arrow-expanded" ).addClass( "arrow-unexpanded" );
					}
			
					
				})





			},
			template:'<div class="word"><span class="arrow arrow-unexpanded"></span><span>{{item.word | makeUppercase}}</span></div><div class="definition" ng-bind-html="item.definition" ></div>',

		



		
		}
	}).directive ('guzik', function () {
		return {
			restrict: 'E',
			
			scope: {
				info: '=',
				
			},
			link: { pre:function(scope,element,attrs) {
					//console.log(scope.info.state +"dd")
					if(scope.info.state!=="jb-disabled") {
						// wipe everythign firts 

							
							
							element.bind("click", function(){

								//console.log(scope.info.letter, scope.info.state, scope.$parent.query)		
								//scope.$apply(function() { scope.query ="l"});

								
   								//scope.$parent.$digest();



								scope.$parent.$apply(function() { scope.$parent.query = scope.info.letter});
											//scope.query = scope.info.letter;
											//console.log(scope.info.state)

									

									//console.log(scope.info.letter, scope.$parent.query, element.html())
									/*if(scope.info.state == "jb-selected") {
										scope.info.state="jb-unselected"

									} else if(scope.info.state =="jb-unselected") {
										scope.info.state="jb-selected";
									}
									scope.$parent.$digest();*/

					})

				}

			}, post: function(scope,element) {
				if(scope.info.state!=="jb-disabled") {
				//	scope.$parent.$watch('query', function() { scope.info.state="jb-unselected";});

				}
			}
		},
			template:'<button ng-class="info.state">{{info.letter}}</button>'
		}
	})




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
        	if(value&&list) 
        	
        	{
            //console.log('MyFilter(list, ', propertyName, ', ', value, ')');
       
       
  			if(value.length>1) {
		  		var newList = [];
		        var lower = value.toLowerCase();
		        
		        angular.forEach(list, function(v) {
		                if (v[propertyName].toLowerCase().indexOf(lower) >= 0)
		                    newList.push(v);
		        });
		        
		        return newList;
  			
  			} 
  			//in case we search only by a letter
  			else if (value.length==1) 

  			{
			  		var filtered = [];
			        var letterMatch = new RegExp(value, 'i');
			       
				        for (var i = 0; i < list.length; i++) {
				            var item = list[i];
				            if (letterMatch.test(item.word.substring(0, 1))) {
				                filtered.push(item);
				            }
				        }
    	
        		return filtered;
			      


  			}
  		

  		}
             //the end of if value

        
        }
    });
