/*
* Creation d'un module Angular
*/
var app = angular.module('main', ['ngRoute']);

/*
* Configuration des routes
* Pour avoir accès aux vues 
*/
app.config(routeConfig);

function routeConfig($routeProvider){
  $routeProvider.when('/', {
     templateUrl: 'vues/Accueil.html',
     controller: 'homeCtrl'
  }).when('/Apropos', {
     templateUrl: 'vues/about.html',
     controller: 'aboutCtrl'
  }).when('/Nous-contacter', {
    templateUrl: 'vues/contact.html',
    controller: 'aboutCtrl'
 }).when('/service/immobilier', {
  templateUrl: 'vues/service/immobilier.html',
}).when('/service/E-commerce', {
  templateUrl: 'vues/service/E-commerce.html',
}).when('/service/cinema', {
  templateUrl: 'vues/service/cinema.html',
}).when('/service/demande-service', {
  templateUrl: 'vues/service/demande-service.html',
}).otherwise({
     templateUrl:'vues/erreur404.html'
  });
}

/*
* Defintion des controllers
*/
app.controller('homeCtrl', function($scope){
  $scope.page = "Page d'accueil";
});
app.controller('aboutCtrl', function($scope, $location){
  $scope.goToAbout = function(){
    $location.path('/');
  };
});
/*


app.controller('aboutCtrl', function($scope){
    $scope.team = "L'equipe";
});*/


