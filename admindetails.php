<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Admin Details</title>
</head>
<body>
    <form method="get" action="admininfodetail.php">
        <div class="form-group">
          <label for="moviename">Movie Name</label>
          <input type="name" class="form-control" id="moviename" aria-describedby="emailHelp" placeholder="Enter Movie Name" name="moviename">
        </div>
        <div class="form-group">
          <label for="runtimename">Runtime</label>
          <input type="name" class="form-control" id="runtimename" placeholder="Enter Runtime" name="runtime">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
       
</body>
</html>