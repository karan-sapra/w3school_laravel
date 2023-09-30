<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <h2>Registration</h2>
    
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    @csrf
        <div class="form-group">
          <input type="hidden" name="id">
    </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Register">
        </div>
    </form>
</body>
</html>
<?php
// class insert{

// public function __construct(){
//     $conn=new mysqli("localhost","root","","w3_users");

//   if(!$conn){
//     die("connection failed" .$conn->connect_error);
//    }
// //     else{
// //     echo "connection successfull";
// //    }

//     if($_SERVER["REQUEST_METHOD"]=="POST"){
       
//        $username=$_POST["username"];
//        $password=$_POST["password"];
//        $email=$_POST["email"];
//     $sql="INSERT INTO w3_users VALUES ('','$username','$email', '$password')";
//    $res=$conn->query($sql);
   
//     // $query=$conn->prepare($sql);
//     // $query->bind_param("sss",$username,$email,$password);
//     // $query->execute();
//     //         echo $query; 
//                 if($res){
//                   echo"registration successfulll";
//                  header("refresh:0.4;URL=/w3-school-clone/login.php");
//                  }
//          $conn->close();         
//    }
// }
// }



// $object=new insert;






?>


















