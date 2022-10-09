<!DOCTYPE html>
<html lang="en">
<head>
    <title>WORLD OF PUZZLES</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-image: url('https://th.bing.com/th/id/OIP.53k7GDLbQYVol_fzhKHaEAHaDe?w=309&h=164&c=7&r=0&o=5&dpr=1.5&pid=1.7');
background-repeat: no-repeat;
background-size: cover;
}
h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 52px;
    padding:40px;
    text-align: center;
    font-family: 'Lucida Sans';
}
.content{
    text-align:center;
}

button{
    margin-top: 40px;
    width: 30%;
    background-color: grey;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.p{
    text-align: center;
}
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

        <h3>Score</h3>
        <div class="content">
            <h1> <?php
            include 'home.php';
            $score=$_SESSION['score'];
                echo $score; 
                ?></h1>
                <h1>-----------------------------</h1>
        </div>
        <div class="p">
        <button class="btn" onclick="location='game_Sel.php'">Play Again</button><br>
                  <button class="btn1" onclick="location='score.php'">View Score Board</button><br>
    </div>
</body>
</html>
