<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container" >
    <h1>Movie List</h1>

 <form method="post" action="../controllers/LoginViewController.php">
     <button type="button" class="btn btn-primary">Update Movie List</button>
    <div class="mb-3">
        <label for="title" class="form-label">Search by title</label>
        <input type="text" class="form-control" id="title" >
    </div>
    <div class="mb-3">
        <label for="date_range" class="form-label">Date range</label>
        <input type="date_begin" class="form-control " id="date_begin"> - <input type="date_end" class="form-control" id="date_end">
    </div>

     <div class="mb-3">
        <label for="date_range" class="form-label">Sort by</label>
        <select id='sort' class="form-select" aria-label="Default select example">
            <option value="1">asc</option>
            <option value="2">title</option>
            <option value="3">date</option>
        </select>
    </div>
   
    <button type="button" onclick='movieList()' class="btn btn-primary">Submit</button>
    </form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Year</th>
      <th scope="col">Type</th>
      <th scope="col">Poster</th>
    </tr>
  </thead>
  <tbody id="movie_list">
  
  </tbody>
</table>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../index.js"></script>
</body>
</html>