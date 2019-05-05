<?php
  session_start();

  $email = "";
  $p1="";
  
   $sql="";
  $errors = array();
   
 
// connect to the database
  $db = mysqli_connect('localhost','kaju','badam','hoho');

//login page
       if(isset($_POST['login'])){
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $p1 = mysqli_real_escape_string($db,$_POST['password']);

      
     //to ensure form is filled properly
      
      
      if(empty($email)){
          array_push($errors, "email is required");
      }
      if(empty($p1)){
          array_push($errors, "password is required");
      }
       if(count($errors) == 0)
       {   
           $password = md5($p1);
           $query = "SELECT * FROM customer WHERE email='$email' AND password='$p1'";
       
           $result=mysqli_query($db,$query);
           if(mysqli_num_rows($result)==1)
           
           {
           
          $_SESSION['email'] = $email;
           
          header('location: book.php'); //redirecting page
       }
           else
           {
               array_push($errors,"wrong user name or password");
           }
       }
       }
?>       