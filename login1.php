<?php
    $name=$_POST['firstname'];
    $password=$_POST['Password'];
    $host = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbname = 'student';


    if (strpos($name, '@') == false){
      echo "Email id is invalid";
      die();
    }
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(!$conn){
    die('Could not connect: '.mysqli_connect_error());
    }
    echo 'Connected successfully<br/>';


    $sql = "SELECT Name,Password FROM user WHERE Name ='$name' AND Password = $password";



    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      echo "Logged in Succesfull";
    } else {
      echo "Invalid data";
    }
    $conn->close();


 ?>
