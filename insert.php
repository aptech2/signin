<?php
include 'head.php';

//  include ('connet.php');
 $name=$_POST['name'];
 $uname=$_POST['uname'];
 $mail=$_POST['mail'];
 $roll=$_POST['roll'];
 $pass=$_POST['password'];

 $image=$_FILES['pic']['name'];
 $imgtn=$_FILES['pic']['tmp_name'];
 $imgty=$_FILES['pic']['type'];
 $imgsi=$_FILES['pic']['size'];

 $folder="images/";
//  simplefolername
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg" ){
if($imgsi<=10000000){
    $path=$folder.$image;


$q="INSERT into `users` (`fullname`, `user` ,`email` ,`password`,`role`,`profile`)
 VALUES ( '$name' ,'$uname','$mail','$pass','$roll','$path')";

$result=mysqli_query($con,$q);
move_uploaded_file($imgtn,$path);
if($result)
{
    echo "<script> window.location.href='login3.php';</script>";

}

else{
    echo  mysqli_error($con);

}

}
else{
    "<script> alert('imagesize eror');window.location.href='indexx.php'</script>";
}

}
else{
    echo "<script> alert('images  format eror');window.location.href='indexx.php'</script>";
}







?>