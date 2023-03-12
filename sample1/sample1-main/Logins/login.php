<?php

@include 'firebaseRDB.php';

?> 

<!--session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin/admin_home.php');
      
      }elseif($row['user_type'] == 'chem'){
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['chem_name'] = $row['name'];
         header('location:userchem/userchem.php');

      }elseif($row['user_type'] == 'waste'){
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['waste_name'] = $row['name'];
         header('location:userwaste/userwaste.php');

      }elseif($row['user_type'] == 'trade'){
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['trade_name'] = $row['name'];
         header('location:usertrade/usertrade.php');

      }elseif($row['user_type'] == 'equip'){
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['equip_name'] = $row['name'];
         header('location:userequip/userequip.php');

      }


     
   }else{
      $error[] = 'incorrect email or password!';
   }
  
};
?-->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="estyle.css">

</head>
<body>
   
<div class="form-container" style="background-color: wheat;">

   <form action="" method="post" style="border: solid;">
   <img src="Ebook.png" style="width:460px;height:300px;">
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your Email:">
      <input type="password" name="password" required placeholder="Enter your Password:">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">Register now</a></p>
   </form>

</div>

</body>
</html>