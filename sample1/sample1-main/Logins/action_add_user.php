<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$data = $db->retrieve("users");
$data = json_decode($data, 1);
$count =0;

$count++;


   
$insert = $db->insert("users",[
  // "$count(name)" => $_POST['count'],
   "name" => $_POST['name'],
   "useridno"     => $_POST['useridno'],
   "contact"    => $_POST['contact'],
   "email"      => $_POST['email'],
   "address"      => $_POST['address'],
   "year"      => $_POST['year'],
   "password"      => $_POST['password'],
   "courseID"      => $_POST['courseID'],
    "penalty"    => $_POST['penalty'],
   "user_type"  => $_POST['user_type']
]);

echo "data saved", "$count";
