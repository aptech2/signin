<?php
 include 'head.php';

?>
<form action="log4.php" method="post">
  <label for="">Email</label>
  <input type="text" name="email" id="">

  <label for="">Password</label>
  <input type="password "  name="password" id="">


<!-- <?php
// include ('connet.php');
// $q="select * from user";
// $rows=mysqli_query($con,$q);

// echo "<select class ='dropdown ' name='role'>";
// echo "<option value='' disaable selected > select an option </option>";

// while($data =mysqli_fetch_assoc($rows)){
//          echo "<option class ='dropdown-item' value='$data[role_id]' > $data [role_name]  </option>\n";

// }
// echo " </select>";

?> --> <div class="form-outline mb-2">


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

<button type="submit">sign in</button>





</form>
