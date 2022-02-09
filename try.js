var myapp=angular.module('myapp',[]);
myapp.controller('ctrl',function($scope,$location){
$scope.fillseat=[];
$scope.header="white";
$scope.price=0;
$scope.seatsavailable=0;
$scope.arr=['1','2','3','4','5','6','7','8','9','10','11','12','13','14'];
$scope.arr1=['1','2','3','4','5','6','7'];
$scope.rate=0;
$scope.seats=function(name,price){
    console.log("hello");
if(this.header=="white"){   
this.header="green";
$scope.rate=$scope.rate+price;
$scope.seatsavailable=$scope.seatsavailable+1;
$scope.fillseat.push(name);
 }
else{
    this.header="white";
    $scope.rate=$scope.rate-price;
    $scope.seatsavailable=$scope.seatsavailable-1;
    $scope.index = $scope.fillseat.indexOf(name);
    $scope.fillseat.splice($scope.index, 1); 
}
}
$scope.datasend=function(){
    for($scope.i=0;$scope.i<$scope.fillseat.length;$scope.i++){
    angular.element($('#'+$scope.fillseat[$scope.i]).removeAttr('ng-click'));
    angular.element($('#'+$scope.fillseat[$scope.i]).css('background-color',"grey"));
    }
//window.location.href="datasend.php?array="+$scope.fillseat;   
}
});