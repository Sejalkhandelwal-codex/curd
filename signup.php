

 <?php 
require './connection.php';
// if (isset($_POST['submit'])){
//   if ($_SERVER ["REQUEST_METHOD"]== "POST"){
//   $name = $_POST['name'];
//   $password = md5($_POST['password']);

//   $sql="INSERT INTO `crud_table` (`name`, `pass`) VALUES ('$name', '$password')";

//   if ($conn->query($sql) === TRUE) {

//     echo "record inserted successfully";

//   }

// }
// } 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
   <button class="btn-primary"  id="btn1">sign up</button>
   <button class="btn-primary" id="btn2"> login</button>
  </nav>

<!-- .....login form  -->
<form method="POST" action="./display.php">
 
    <div class="container p-5 login" id="login" >
    <h1>signup</h1>
  
    <div class="mb-3">
  
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
    </div>
    <div class="mb-3">
      
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password">
    </div>
    <input type="submit" class="btn btn-primary" name="submit" />

  </div>
</form>
<!-- ........login form -->


<!-- .....sign form -->
<form method="POST" action="<?=$_SERVER['PHP_SELF'] ?>">

   <div class="container p-5 reg" id="signup" style="display:none;" >
    <h1>login</h1>  
    <div class="mb-3">

      <input type="text" class="form-control" placeholder="enter name" id="username" name="name">
    </div>
    <div class="mb-3">

      <input type="password" class="form-control" name="password" id="password">
    </div>
    <input type="submit" class="btn btn-primary" name="submit" />
   
  </div>
</form>

<script>
$('#btn2').click(function(){
  $('#signup').show();
  $('#login').hide();
});
$('#btn1').click(function(){
  $('#login').show();
  $('#signup').hide();
})
$("button").click(function(event){
  event.preventDefault();
});
</script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>