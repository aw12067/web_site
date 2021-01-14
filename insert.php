<?php
  $name=$_POST['name'];
  $password=$_POST['password'];
  $conpassword=$_POST['con-password'];
  $course=$_POST['course'];
  $std=$_POST['std'];

  if($password != $conpassword){
    echo "Password does not match";
    die();
  }

  if (strpos($name, '@') == false){
    echo "Email id is invalid";
    die();
  }

  $host = 'localhost:3306';
  $dbUsername = 'root';
  $dbPassword = 'root';
  $dbname = 'student';

  $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

  if(!$conn){
  die('Could not connect: '.mysqli_connect_error());
  }
  echo 'Connected successfully<br/>';

  $sql = "INSERT INTO user(Name,Password,Section,Course) values ('$name','$password','$std','$course')";
  if(mysqli_query($conn, $sql)){
   echo "Record inserted successfully";
  }else{
  echo "Could not insert record: ". mysqli_error($conn);
  }

  mysqli_close($conn);
 ?>
 
