<!--?php

@include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)) {
   header('location:../login_form.php'); 
}; 
if (!isset($_SESSION['admin_name']))
if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:/lajefatrading/admin/admin_page.php');
      }
   }

};


?-->


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="estyle.css">

</head>
<body>
   
<div class="form-container"style="background-color: wheat;">

   <form action="action_add_user.php" method="post" style="border: solid;" >
      <h3 style="color:white;">ACCOUNT REGISTRATION</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p style="text-align:left;font-weight:bold;">ID Number</p> 
      <input type="text" name="useridno" required placeholder="Enter your ID Number :">

      <p style="text-align:left;font-weight:bold;">Name</p>
      <input type="text" name="name" required placeholder="Enter your Name :">

      <p style="text-align:left;font-weight:bold;">Contact</p>
      <input type="text" name="contact" required placeholder="Enter your Contact Number :">

      <p style="text-align:left;font-weight:bold;">Email</p>
      <input type="email" name="email" required placeholder="Enter your Email :">

      <p style="text-align:left;font-weight:bold;">Address</p>
      <input type="text" name="address" required placeholder="Enter your Address :">

      <p style="text-align:left;font-weight:bold;">Year</p>
      <input type="date" name="year" required placeholder="Enter your Year :">

      <p style="text-align:left;font-weight:bold;">Password</p>
      <input type="password" name="password" required placeholder="Enter your Password :">

      <p style="text-align:left;font-weight:bold;">Confirm Password</p>
      <input type="password" name="cpassword" required placeholder="Confirm your Password :">

      <p style="text-align:left;font-weight:bold;">Course</p>
      <input type="text" name="courseID" required placeholder="Enter your Course :">


      <p style="text-align:left;font-weight:bold;">Penalty</p>
      <input type="text" name="penalty" required placeholder="Enter your Penalty :">
    
      <select name="user_type">
         <option value="chem">User for Librarian</option>  
         <option value="admin">User for Admin</option>
      </select>
      <input type="submit" name="submit" value="Register Now" class="form-btn" >
      <p>Already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>