
<html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background:url(backgroundforcpuzzle.jpg);
    background-repeat: no-repeat;
	background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
}
a{
    position: relative;
    display: inline-block;
    padding: 35px 40px;
    margin: 40px 0;
    color: #c974d4f5;
    font-size:28px;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
   
}
a:hover{
    background: #c974d4f5;
    color: #050801;
    box-shadow: 0 0 5px #c974d4f5,
                0 0 25px #c974d4f5,
                0 0 50px #c974d4f5,
                0 0 200px #c974d4f5;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}
a:nth-child(1){
    filter: hue-rotate(270deg);
}
a:nth-child(2){
    filter: hue-rotate(180deg);
}
a span{
    position: absolute;
    display: block;
}
a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg,transparent,#c974d4f5);
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
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#c974d4f5);
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
    height: 4px;
    background: linear-gradient(270deg,transparent,#c974d4f5);
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
    width: 4px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#c974d4f5);
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
            left:37%;
            top: 120px;
            font-size:36px;
            font-family:'Times New Roman', Times, serif;
            color:pink;
}
</style>
<body>


<p>CHOOSE A PUZZLE</p>
  
<a href="game_diff_c.php">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <img src="https://www.eslgamesplus.com/wp-content/uploads/2013/09/colors-crossword.jpg"
    height="72">
</a>
    <a href="game_diff_s.php">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <img src="https://apprecs.org/gp/images/app-icons/300/eb/com.razzlepuzzles.sudoku.jpg"
    height="72">
</a>
</body>
</html>