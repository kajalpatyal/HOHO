<?php
  session_start();

  $fname = "";
  $lname = "";
  $email = "";
  $p1="";
  $p2="";
  $mob="";
  $success="";
  $dot="";
  $noofseats="";
  $selval="";
   $sql="";
  $errors = array();
   
 
// connect to the database
  $db = mysqli_connect('localhost','kaju','badam','hoho');

  

//if sign up button is clicked
  if(isset($_POST['signup'])){
      
      $fname = mysqli_real_escape_string($db,$_POST['firstname']);
      $lname = mysqli_real_escape_string($db,$_POST['lastname']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $p1 = mysqli_real_escape_string($db,$_POST['password1']);
      $p2 = mysqli_real_escape_string($db,$_POST['password2']);
      $mob = mysqli_real_escape_string($db,$_POST['mob']);
         
          $password = $p1; 
          $sql = "INSERT INTO customer (fname,lname,email,password,mob)
          VALUES ('$fname','$lname','$email','$password','$mob')";
          
          mysqli_query($db,$sql);
          
          $_SESSION['firstname'] = $fname;
          $_SESSION['lastname'] = $lname;
          $_SESSION['email'] = $email;
          header('location: login.php'); //redirecting page 
      }
  

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
       //if(count($errors) == 0)
       //{   
           $password = md5($p1);
           $query = "SELECT * FROM customer WHERE email='$email' AND password='$p1'";
           $result = mysqli_query($db,$query);
           if(mysqli_num_rows($result) == 1)
           {
               $_SESSION['email'] = $email;
            
               header('location: book.php');
           }
           else
           {
               array_push($errors,"wrong username/password combination");
               header('location: login.php');
           }
           
       
       //}
    }


//logout
if(isset($GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['success']);
    header('location:book.php');
}

//proceed

    /* if(isset($_POST['proceed'])){
      
      $dot = mysqli_real_escape_string($db,$_POST['dot']);
      $noofseats = mysqli_real_escape_string($db,$_POST['noofseats']); 
      $selval = $_POST['pckg_type'];
         $fname=$_SESSION['fname'];
         $email=$_SESSION['email'];
         $price=
         str="insert into booking values('$fname','$email','$dot','$noofseats','$selval','$price')"
     */
?>