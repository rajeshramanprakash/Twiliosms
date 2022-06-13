<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Kadamba</title>
</head>
<body>
<!-- Nave Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kadamba</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- Nave End -->
<!-- Form Start -->
<div class="card" >
 
  <div class="card-body">
<form action="" method="POST">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="tel" class="form-control"  name="phone_number" require >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Message</label>
    <input type="text" class="form-control" name="message" require >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
</div>
<!-- Form End -->

   
    
    
  
    
</body>
</html>