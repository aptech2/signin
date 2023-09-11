<?php
include 'head.php';
// include 'connet.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST['email'];
    $passs=$_POST['password'];
    $rules=$_POST['roll'];
    $sql=" SELECT * From  users where email='$email' and  password ='$passs' and role = '$rules' ";

    $result = $con->query($sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);


    if($count==0){
        echo "<script> alert('log in failed') ;window.location.href='head.php'</script>";
    }
        elseif($rules==7){
            $_SESSION['Email']=$email;
            $_SESSION['Id']=$row['fullname'];
            $_SESSION['Username']=$row['user'];
            $_SESSION['role']=$row['role'];
            $_SESSION['img']=$row['profile'];
            echo "<script> alert('WElcome Admin') ;window.location.href='home1.php'</script>";
 

        }
        elseif($rules==8){
            $_SESSION['Email']=$email;
            $_SESSION['Id']=$row['fullname'];
            $_SESSION['Username']=$row['user'];
            $_SESSION['role']=$row['role'];
            $_SESSION['img']=$row['profile'];
            echo "<script> alert('WElcome student') ;window.location.href='home2.php'</script>";
 

        }

        else{
            $_SESSION['Email']=$email;
            $_SESSION['Id']=$row['fullname'];
            $_SESSION['Username']=$row['user'];
            $_SESSION['role']=$row['role'];
            $_SESSION['img']=$row['profile'];
            echo "<script> alert('WElcome faculty') ;window.location.href='home3.php'</script>";
            echo $_SESSION['Username'];
 

        }



}
?>





















