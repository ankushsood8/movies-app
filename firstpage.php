<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;  
    font-family: 'Balsamiq Sans', cursive;
    background-color: aliceblue;
      }
    </style>
    <title>First Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="firstpagecontroller.js"></script> 
</head>
<body ng-app="myAppp" >
<div style="display: flex;align-items: center;justify-content: center;width: 100%;height:700px"ng-controller='ctrl' ng-show="x">
    <a href="#!admin" style="text-decoration: none">
    <button type="button" class="btn btn-primary" style="border-radius: 5px;margin-right: 15px;height: 10%" ng-click="setvalue()">Admin</button>
    </a>
    <a href="#!user" style="text-decoration: none">
    <button type="button" class="btn btn-secondary" style="border-radius: 5px;height: 10%" ng-click="setvalue()">User</button>
</a>
</div>
<div class="ng-view" >  </div>
</body>
