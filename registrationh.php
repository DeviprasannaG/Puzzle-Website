<!DOCTYPE html>
<html lang="en">
<head>
    <title>WORLD OF PUZZLES</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-image: url('https://w0.peakpx.com/wallpaper/195/470/HD-wallpaper-jigsaw-3d-puzzle-thumbnail.jpg');
background-repeat: no-repeat;
background-size: cover;
}
form{
    height: 550px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position:absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(5px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 30px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color:black;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    color:#a41c5b;
    font-family: 'Broadway';
     font-size: 32px;}
label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;}
input{
    display: block;
    height: 30px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 8px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;}
::placeholder{
    color:#ff3399;
}
button{
    margin-top: 10px;
    width: 100%;
    background-color: #ad8599;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
  
}
.p{
    text-align: center;
}
a{
    text-decoration: none;
    font-size: 20px;
    color: pink;
    text-align:center;
}
a:hover
{
    color: palevioletred;
}


    </style>
</head>
<body>
<form action="registration.php" method="post">
        <h3>Register here</h3>
        <label>Name</label><input type="text" placeholder="name" name="name">
		<label>Email</label><input  type="email" required placeholder="mail id" name="email">
		<label>Gender</label><input type="text" placeholder="gender" name="gender">
		<label>Password</label><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="password" name="password">
        <div class="p">
		<button type="submit" name="submit">Submit</button>
        </div>
    
    <a href="index.php">Already have an ACCOUNT ?</a>
            </form>
</body>
</html>
  
  