<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dppass = '';
$dbbass = 'crud';
$conn = new mysqli($dbhost, $dbuser ,$dppass , $dbbass);
if (mysqli_connect_error()){
    echo 'not connected';
}
else {
    echo '';
}
if (isset($_POST['submit'])){
    if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    $name = $_POST['name'];
    $password = md5($_POST['password']);
  
    $sql="INSERT INTO `crud_table` (`name`, `pass`) VALUES ('$name', '$password')";
  
    if ($conn->query($sql) === TRUE) {
        // header ('locatiom:./display.php');
      echo "record inserted successfully";
  
    }
  
  }
  } 


?>