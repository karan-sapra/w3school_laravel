
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}"> 
</head>
<body>
    <h2>Login</h2>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
       @csrf
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
        <input type="button" value="Register" id="register-button" onclick="location.href='register';">
    </form>
</body>
</html>

 <?php
 
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $conn=new mysqli("localhost","root","","w3_users");
//      $email=$_POST['email'];
//      $password=$_POST['password'];
//     if(!$conn){
//       die("connection failed" .$conn->connect_error);
//     }
//       else{
//     $sql= "SELECT * FROM w3_users WHERE email='$email' AND password='$password'";
//     $result=$conn->query($sql);
  
//          if($result->num_rows){
//         header("LOCATION:/w3-school-clone/index.html");
//     }
//     else{
//         echo "no users found";
//     }
// }   
//      }

?>  
