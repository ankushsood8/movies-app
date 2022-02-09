<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>
<div class="container-fluid text-center display-4" style="height: 50px">
    Login
</div>
<div class="container-fluid" style="background-color: #CFF4FC" ng-controller="ctrl">
<div class="row align-items-center justify-content-center" style="height: 650px;padding-left: 30%">
    <form  method="get">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label display-6">Email address</label>
          <input type="email" class="form-control rounded-lg" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 60%" ng-model="emailname">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label display-6">Password</label>
          <input type="password" class="form-control rounded-lg" id="exampleInputPassword1" style="width: 60%" ng-model="passwordname">
        </div>      
        <button  class="btn btn-primary" ng-click="enter()" id="ank">Submit</button>
      </form>
</div>
</body>
</html>



