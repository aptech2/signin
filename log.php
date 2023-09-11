<?php
include('head.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
$sql = "SELECT * FROM users where mail='$email' and roles='$role'";
$result = $con->query($sql);

$row = mysqli_fetch_assoc($result);
$count=mysqli_num_rows($result);
$storedHashedPassword = $row['pass'];
if($count==0){
    echo "<script>alert('Log In failed'); window.location.href='login.php';</script>";
  }
else if (password_verify($password, $storedHashedPassword)) {

if($role==1){
   
    $_SESSION['Email']=$email;
    $_SESSION['Id']=$row['user_id'];
    $_SESSION['Username']=$row['user'];
    $_SESSION['role']=$row['roles'];
    $_SESSION['img']=$row['profile_pic'];
    setcookie("email",$email);
    echo "<script>alert('admin'); window.location.href='home.php';</script>"; 
}
elseif($role==2){
    $_SESSION['Email']=$email;
    $_SESSION['Id']=$row['user_id'];
    $_SESSION['Username']=$row['user'];
    $_SESSION['role']=$row['roles'];
    $_SESSION['img']=$row['profile_pic'];
    setcookie("email",$email);
    echo "<script>alert('faculty'); window.location.href='home2.php';</script>"; 
}
else{
    $_SESSION['Email']=$email;
    $_SESSION['Id']=$row['user_id'];
    $_SESSION['Username']=$row['user'];
    $_SESSION['role']=$row['roles'];
    $_SESSION['img']=$row['profile_pic'];
    setcookie("email",$email);
    echo "<script>alert('student'); window.location.href='home3.php';</script>"; 
}
}
else{
    header('location:login.php');
}
}
?>