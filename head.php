<?php
session_start();
include('connet.php');
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
<body>
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header pt-3 bg-primary ">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-white mr-3" href="tel:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-white" href="https://facebook.com/themefisher/"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-white" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-white" href="https://github.com/themefisher"><i class="ti-github"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-white" href="https://instagram.com/themefisher/"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            
            <li class="list-inline-item"><a class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
          <?php  if(!isset($_SESSION['Username'])) { ?>
            <li class="list-inline-item"><a class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="login3.php" >login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="form.php" >register</a></li>
            <li class="list-inline-item"><img style="border-radius:100%;" src="images/download.png" alt="profile" height="30" width="30"></li>
          <?php  } else { ?>
            <li class="list-inline-item"><a class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="#loginModal"  >
              <?php echo  $_SESSION['Username']?></a></li>
            <li class="list-inline-item"><a class="text-uppercase text-white p-sm-2 py-2 px-0 d-inline-block" href="logout.php" >logout</a></li>
            <li class="list-inline-item"><img style="border-radius:100%;" src="<?php echo $_SESSION['img'] ?>" alt="profile" height="30" width="30"></li>
<?php } ?>
        </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>