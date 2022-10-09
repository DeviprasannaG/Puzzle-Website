<?php
include 'home.php';
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    if ($email != "" && $password != ""){
        $sql_query = "select count(*) as count,name from registration where email='".$email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['count'];
        $name=$row['name'];  
        if($count>0){
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            echo '<script> alert("Succesfull.");window.location.href = "game_sel.php";</script>';
        }else{
            echo 
            '<script> alert("Invalid username and password");window.location.href = "index.php";</script>';
        }
}
}
?>
<html>
<head>
    <title>WORLD OF PUZZLES</title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    background: url('https://w0.peakpx.com/wallpaper/195/470/HD-wallpaper-jigsaw-3d-puzzle-thumbnail.jpg');
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    font-family:  Cascadia Code;
    top: 50%;
    left: 50%;
    position: absolute;
    background-color: rgba(255,255,255,0.3);
    border-radius: 6px;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 32px;
    font-family: 'Broadway';
    color:#a41c5b;
}
::placeholder{
    color:grey;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #a41c5b;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #00463e;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 16px;
    color: pink;
}
.login-box a:hover
{
    color: palevioletred;
}
</style>
    <body>
    <div class="login-box">
    <img src="avatar.jpeg" class="avatar">
        <h1>Login Here</h1>
            <form action="" method="post">
            <p>Email Id</p>
            <input type="text" name="email" placeholder="Enter Mail Id">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="login">
            <div style="text-align:center">
            <a href="forgot.php">Forget Password</a><br><br> 
            <a href="registrationh.php">Create an account</a>  
        </div> 
            </form>
        </div>
      
    </body>
</html>
