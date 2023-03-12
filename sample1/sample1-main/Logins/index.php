<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>
<title>Simple Firebase RDB CRUD</title>
<link rel="stylesheet" href="style.css">
<a href="register.php"><button>ADD DATA</button></a><br><br>
<table border="1" width="500">
   <tr align="center" bgcolor="#dddddd";>
      <td>Name</td>
      <td>User ID</td>
      <td>Contact</td>
      <td>Email</td>
      <td>Address</td>
      <td>Year</td>
      <td>Password</td>
      <td>Course</td>
      <td>Penalty</td>
      <td>Usertype</td>
      <td colspan="2">Action</td>
   </tr>
   <?php
   $data = $db->retrieve("users");
   $data = json_decode($data, 1);
   
  if(is_array($data)){
      foreach($data as $id => $users){
         echo "<tr>
         <td>{$users['name']}</td>
         <td>{$users['useridno']}</td>
         <td>{$users['contact']}</td>
         <td>{$users['email']}</td>
         <td>{$users['address']}</td>
         <td>{$users['year']}</td>
         <td>{$users['password']}</td>
         <td>{$users['courseID']}</td>
         <td>{$users['penalty']}</td>
         <td>{$users['user_type']}</td>
         <td><a href='edit.php?id=$id'>EDIT</a></td>
         <td><a href='delete.php?id=$id'>DELETE</a></td>
      </tr>";
   }   }
   
   ?>
</table>
