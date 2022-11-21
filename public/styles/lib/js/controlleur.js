app.config(function($routeProvider){
  $routeProvider.when('/', {
     templateUrl: '/vues/about.html',
     controller: 'aboutCtrl'
  }).when('/login', {
  	 templateUrl: '/components/login.html',
  	 controller: 'loginCtrl'
  }).when('/dashbord',{
     resolve: {
      check: function($location, user){
          if (!user.isUerLoggedIn()) {
            $location.path('/login');
          }
        },
     },
     templateUrl: '/components/dashboard.html',
     controller: 'dashboardCrtl'
  })
  .otherwise({
  	 template:'404'
  })
});

app.controller('aboutCtrl', function($scope, $location){
  $scope.register = function(){
    $location.path('/about');
  };
});
