'use strict';
/*******************/
/*** controllers ***/

angular.module('jargonBuster.controllers',[])
  .controller('MainCtrl', function ($scope,dictionaryService,$routeParams) {
 

  	 $scope.myselect = "word";
  	 //$scope.query = "A";

    
     // if  the routeParams is not supplied by default it selects A; 
     $scope.query = $routeParams.id || "A";
    
     //console.log("dupy",$routeParams.id)
     //console.log("the newest");
  	 //$scope.buttonstate = "jb-selected";


     $scope.all ={letter:'INDEX',state:'jb-unselected'};

  	 $scope.a = { letter: 'A', state: 'jb-selected' };
 	   $scope.b = { letter: 'B', state: 'jb-unselected' };
	   $scope.c = { letter: 'C', state: 'jb-unselected' };
	   $scope.d = { letter: 'D', state: 'jb-unselected' };
  	 $scope.e = { letter: 'E', state: 'jb-disabled' };

  	 $scope.f = { letter: 'F', state: 'jb-unselected' };
 	   $scope.g = { letter: 'G', state: 'jb-unselected' };
	   $scope.h = { letter: 'H', state: 'jb-unselected' };
	   $scope.i = { letter: 'I', state: 'jb-unselected' };
  	 $scope.j = { letter: 'J', state: 'jb-disabled' };

  	 $scope.k = { letter: 'K', state: 'jb-disabled' };
 	   $scope.l = { letter: 'L', state: 'jb-unselected' };
	   $scope.m = { letter: 'M', state: 'jb-unselected' };
	   $scope.n = { letter: 'N', state: 'jb-unselected' };
  	 $scope.o = { letter: 'O', state: 'jb-unselected' };

  	 $scope.p = { letter: 'P', state: 'jb-unselected' };
 	   $scope.r = { letter: 'R', state: 'jb-unselected' };
	   $scope.s = { letter: 'S', state: 'jb-unselected' };
	   $scope.t = { letter: 'T', state: 'jb-unselected' };
  	 $scope.u = { letter: 'U', state: 'jb-unselected' };
  	 $scope.v = { letter: 'V', state: 'jb-unselected' };
	   $scope.w = { letter: 'W', state: 'jb-disabled' };
	   $scope.x = { letter: 'X', state: 'jb-disabled' };
  	 $scope.y = { letter: 'Y', state: 'jb-disabled' };
  	 $scope.z = { letter: 'Z', state: 'jb-disabled' };


  	 
  	 $scope.buttonArray = new Array($scope.a, $scope.b, $scope.c,$scope.d,$scope.f,$scope.g,$scope.h,$scope.i,$scope.l,$scope.m,$scope.n,$scope.o,$scope.p,$scope.r,$scope.s,$scope.t,$scope.u,$scope.v)


  	 // when the query is changed;
  	 $scope.$watch('query', 
  	 	function () {
  	 	//console.log("change", $scope.query.length);
	  	 	for(var i=0; i<$scope.buttonArray.length ;i++) {
	  	 		//console.log($scope.buttonArray[i].letter,i)

	  	 		if(($scope.buttonArray[i].letter).toLowerCase() == ($scope.query).toLowerCase()) {
	  	 			$scope.buttonArray[i].state = "jb-selected";
	  	 			//console.log("true",$scope.buttonArray[i].letter,$scope.buttonArray[i].state)

	  	 		} else {
	  	 			$scope.buttonArray[i].state = "jb-unselected";
	  	 		}

	  	 	}
  	 	}
  	 );



  	 $scope.test = function (l) {
  	 	
       $scope.litera=l;
       $scope.query=l;
	 }

	 //$scope.$watch('query', function() {
       //alert('hey, myVar has changed!');

   	 
   	 //});

  	 // loading data from JSONP
     dictionaryService.getDictionary().success(function (response) {
        $scope.dictionary = response;
     
    })


  })

