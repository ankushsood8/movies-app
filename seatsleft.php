<!DOCTYPE html>
<html>
<head>
	<title>Seatsleft</title>
	<style type="text/css"></style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body ng-app="myapp" ng-controller="ctrl">
	<div style="background-color: white;height:700px;width:1520px" >
	<center>
		<div style="font-size: 100px">CINEMA</div>
<div style="width: 702px;height: 50px;border: 1px solid black" >
<div ng-repeat="x in arr1" style="width:100px;height:50px;border:1px solid black;float:left;background-color:{{header}}" ng-click=seats($index,200) id="{{$index}}">
{{$index}}
</div>
</div>
<br>
<div style="width: 702px;height: 100px;border: 1px solid black" >
<div ng-repeat="x in arr" style="width:100px;height:50px;border:1px solid black;float:left;background-color:{{header}}" ng-click=seats($index+7,150) id="{{index+7}}">
{{$index+7}}
</div>
</div>
<br>
<div style="width: 702px;height: 100px;border: 1px solid black" >
<div ng-repeat="x in arr" style="width:100px;height:50px;border:1px solid black;float:left;background-color:{{header}}" ng-click=seats($index+21,120) id="{{index+21}}">
{{$index+21}}
</div>
</div>
<br>
<div style="width: 702px;height: 50px;border: 1px solid black" >
<div ng-repeat="x in arr1" style="width:100px;height:50px;border:1px solid black;float:left;background-color:{{header}}" ng-click=seats($index+35,100) id="{{index+35}}">
{{$index+35}}
</div>
</div>
<br>
<SPAN>Total Price</SPAN>
<div style="border 1px solid black;width:100px;height:50px">{{rate}}</div>
<SPAN>Seats Selected</SPAN>
<div style="border 1px solid black;width:100px;height:50px">{{seatsavailable}}</div>
</center>
<div  style="display:flex;justify-content:center">

<button  class="btn btn-primary" id="ank" ng-click="datasend()">Submit</button>

</div>
<body>
<script src="try.js">
</script>

</html>