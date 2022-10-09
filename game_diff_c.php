<!DOCTYPE html>
<html>
    <head>
        <link href="C:\Users\ritwi\Desktop\Miniproject\emh.css" rel="stylesheet" type="text/css" >
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background:url(backgroundforcpuzzle.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family:Verdana, Geneva, Tahoma, sans-serif,bold;
    font-weight: bold;
}
a{
    position: relative;
    display: inline-block;
    padding: 100px 100px;
    margin: 40px 0;
    color: #47f403;
    font-size: 28px;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
   
}
a:hover{
    background: #47f403;
    color: #050801;
    box-shadow: 0 0 5px #47f403,
                0 0 25px #47f403,
                0 0 50px #47f403,
                0 0 200px #47f403;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}
a:nth-child(1){
    filter: hue-rotate(180deg);
}
a:nth-child(2){
    filter: hue-rotate(270deg);
}
a span{
    position: absolute;
    display: block;
}
a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#47f403);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#47f403);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#47f403);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}


a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#47f403);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}
p{
    text-align:center;
    position: absolute;
    left:30%;
    top: 120px;
    font-size:36px;
    font-family:'Times New Roman', Times, serif;
    color:rgb(243, 84, 110);
}

    </style>

<a href="crosswordpuzzle2.php">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Easy
</a>
<a href="crosswordpuzzle3.php">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Medium
</a>
<a href="crosswordpuzzle1.php">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Hard
</a>
<p>CHOOSE DIFFICULTY LEVEL</p>

