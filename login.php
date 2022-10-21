<?php
require './connection.php';
// print_r($_POST);
if (isset($_POST['submit'])){
    if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    $username = $_POST['email'];
    $password = md5($_POST['password']);
    $sql="Select * from register_table  where email='$username'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);
    $data =  mysqli_fetch_assoc($result);

    // print_r($conn->query($sql));die;

      if($num >0){
        if($password == $data['pass']){
          echo 'welcome your are login'; die;
        }else{

          echo " wrong password retry please"; die;
        }
      }
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
<!-- .....sign form -->
<form method="POST" action="<?=$_SERVER['PHP_SELF'] ?>">
<?php

if (isset($_POST['submit'])){
    if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $sql="Select * from crud_table  where name='$name'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);
    $data =  mysqli_fetch_assoc($result);


      if($num >0){
        if($password == $data['pass']){
          echo 'welcome your are login'; die;
        }else{

          echo " wrong password retry please"; die;
        }
      }
  }
  }
?>
   <div class="container p-5 reg" id="signup" style="display:none;" >
    <h1>login</h1>  
    <div class="mb-3">
    <label for="username" class="form-label" >username</label>
      <input type="text" class="form-control" placeholder="enter name" id="username" name="name">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label" > Password</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <input type="submit" class="btn btn-primary" name="submit" />
   
  </div>
</form>
</body>
</html>