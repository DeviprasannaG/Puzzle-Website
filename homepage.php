<!DOCTYPE html>
<html>
    <head>
        <title>WORLD OF PUZZLES</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
            rel="stylesheet">
    </head>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 300;
        }
        .container-fluid {
            width: 100%;
            height: 100vh;
        }
        .container {
            width: 300px;
            height: 80px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 25px;
        }

        h2 {
            font-family: algerian;
            color: black;
            font-size: 34px;
            cursor: pointer;
            position: absolute;
            top:20px;
            left:550px;
            text-align: center;
        }

        .container ul {
            display: flex;
            position: absolute;
            top:500px;
            justify-content: center;
            align-items: center;
        }

        .container ul li {
            list-style: none;
            margin-right: 50px;
            font-family: Arial Narrow Bold;
            color: black;
            font-weight: 700;
            position: absolute;
            top:500px;
            cursor: pointer;
            transition: 0.5s;
        }

        .container ul li:first-child {
            color: #f96200;
        }

        .container ul li:hover {
            color: #f96200;
        }

        .btn {
            
            width: 170px;
            height: 55px;
            color: black;
            background-color: rgb(185, 102, 113);
            font-weight: bold;
            font-size: 26px;
            cursor: pointer;
            border-radius: 10px;
            border: none;
            font-family: 'Times New Roman', Times, serif;
            transition: 0.5s;
            position:absolute;
            top:400px;
            right:850px;
        }
        .btn1{
            font-family: 'Times New Roman', Times, serif;
            width: 170px;
            height: 55px;
            background-color: rgb(185, 102, 112);
            color: black;
            font-weight: bold;
            font-size: 26px;
            cursor: pointer;
            border-radius: 10px;
            border: none;
            transition: 0.5s;
            position:absolute;
            right:650px;
           top:400px;

        }

        .btn:hover {
            background-color: #f96200;
            color: black;
        }
        .btn1:hover {
            background-color: #f96200;
            color: black;
        }

        .content {
            width: 1200px;
            height: 100vh;
            margin: auto;
            text-align: left;
        }

        .content h4 {
            color: rgb(162, 232, 250);
            padding-top: 120px;
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 40px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .content h1 {
            font-size: 80px;
            color: #f96200;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .content p {
            color: black;
            line-height: 30px;
            letter-spacing: 1.3px;
        }

        .content .btn {
            margin-top: 20px;
        }

        .video-background {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 100%;
            height: auto;
            z-index: -1;
            background-size: cover;
            background-repeat: no-repeat;
        }
        a:link {
                color: black;
                background-color: transparent;
                text-decoration: none;
                }
        a:visited {
                color: black;
                background-color: transparent;
                text-decoration: none;
                }
        a:hover {
            color: #f96200;
            background-color: transparent;
            text-decoration: underline;
        }
        a:active {
            color: pink;
            background-color: transparent;
            text-decoration: underline;
            }

    </style>
    <body>
        <div class="container-fluid">
            <video autoplay loop class="video-background" muted plays-inline>
                <source src="homepage.mp4" type="video/mp4">
            </video>
            <h2>World Of Puzzles</h2>
            <div class="container">
            <button class="btn" onclick="location='index.php'">LOGIN</button><br>
                  <button class="btn1" onclick="location='registrationh.php'">REGISTER</button><br>
            </div>
            <div class="content">
                <h4>Start Travelling</h4>
                <h1>Puzzle World</h1>
            </div>
        </div>
    </body>

</html>
