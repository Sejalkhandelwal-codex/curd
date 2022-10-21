<?php
require 'connection.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <button class="btn-primary"><a href="./signup.php" class="text-light">ADD</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">operation</th>

    </tr>
  </thead>
  <tbody>
   
    <?php 
    $sql = "Select * from crud_table";
   
    $result = mysqli_query($conn , $sql);
    if ($result){
        // $row= mysqli_fetch_assoc($result);
        // echo $row['name'];
        // echo $row['pass'];
        while($row= mysqli_fetch_assoc($result))
        {

            $id = $row['id'];
            $name = $row['name'];
            $password = $row['pass'];
            echo '<tr>
            <th scope="row">' . $id .'</th>
            <td>'. $name .'</td>
            <td>'. $password .'</td>
            <td> <button class="btn-primary">  <a href="./update.php"  class="text-light">Update</a> </button> 
            <button class="btn-danger">  <a href="./delete.php?deleteid='.$id.'"  class="text-light">delete</a></button>
            </td>
           
          </tr>';
            
        
        }
    }
    ?>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>