<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body{
    background: url(asz.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
}

form{
    box-shadow: 2px 6px 100px #fffff;
}
.q{

}
    </style><?php   
    include 'head.php';
    ?>
  </head>
  <body>
    <!-- <div class="container-fluid  bg-dark text-light py-3">
        <header class="text-center ">
    <h1 class="display 6">WELCOME TO SIGN IN</h1>
</header> -->

    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2 bg-transparent">
  <form class="row g-3 p-3" action="insert.php"  method="post" enctype="multipart/form-data">
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">user name</label>
    <input type="type" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">user </label>
    <input type="type" class="form-control" name="uname"  na id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="mail"  id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pictures</label>
    <input type="file" class="form-control" name="pic"  id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password"  id="exampleInputPassword1">
  </div>
  <div class="form-outline mb-2">
    <img src="image.png" alt="">


<?php 
include ('connet.php');
$q="select * from user_role";
$rows=mysqli_query($con,$q);

echo  "<select class='dropdown' name='roll'>";
echo "<option value='' disabled selected> Select an option </option>";
while($data =$rows->fetch_assoc()){
   echo "<option class='dropdown-item' value='$data[id] '>$data[role_name] </option>\n";
}
?>
   
</select>
</div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form></section>
<section class="q"></section>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold " href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link active fw-bold  " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold " href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Pricing</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav> -->

  </body>
</html>