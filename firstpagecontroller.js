var appp = angular.module('myAppp', ["ngRoute"]);
appp.config(function($routeProvider) {
    $routeProvider
    .when("/admin", {  
      templateUrl : "userandadminlogin.php"
      
    })
    .when("/user", {
        templateUrl : "userandadminlogin.php"
      })
});
appp.controller('ctrl', function ($scope) {
$scope.x=true;
  $scope.namefield=null;
  $scope.passwordfield=null;
   $scope.enter=function(){ 
   $scope.namefield=$scope.emailname;
   $scope.passwordfield=$scope.passwordname;
   $scope.emailarr=["ankushsood50@gmail.com","geeteshsood50@gmail.com","shivamsood50@gmail.com","parassood50@gmail.com"];
   $scope.passwordarr=["1234","12345","123456","1234567"];
   $scope.admin=["ankushsood50@gmail.com"];
   $scope.pass=["12"];
   for(let i=0;i<4;i++){
       if($scope.emailarr[i]==$scope.namefield&&$scope.passwordarr[i]==$scope.passwordfield){
         console.log($scope.namefield);
         console.log($scope.passwordfield);
         window.location.href="logininfo.php";
       }
       if($scope.admin[i]==$scope.namefield&&$scope.pass[i]==$scope.passwordfield){
        console.log($scope.namefield);
        console.log($scope.pass);
        window.location.href="admindetails.php";
      }
   }
 }
 $scope.setvalue=function(){
   $scope.x=false;
   console.log("h");
 }
});
