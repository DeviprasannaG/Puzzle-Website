<?php
include 'home.php';
if(isset($_POST["submit"]))
{
  if((!empty($_POST['name'])) &&  (!empty($_POST['email'])) && (!empty($_POST['gender'])) &&  (!empty($_POST['password'])))
  { 
  
  $password = $_POST['password'];
     $name = $_POST['name']; 
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $password = $_POST['password'];
     $query = "INSERT INTO registration(name,email,gender,password)VALUES('$name','$email','$gender','$password')";
       $run = mysqli_query($con,$query) or die(mysqli_error($con));
       if($run){
        echo '<script> alert("Form submitted succesfully");window.location.href = "index.php";</script>';

       }
       else{
        echo "Form not submitted."; 
       }
    }
    else{
      echo "all fields required.";
    }
}