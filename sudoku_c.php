<?php
include 'home.php';
$name=$_SESSION['name'];
if(isset($_POST["submit"])) 
{
    $score = $_POST['score'];
	$time = $_POST['time'];
$query = "INSERT INTO score(name,score,time)VALUES('$name','$score','$time')";
$run = mysqli_query($con,$query) or die(mysqli_error($con));
$_SESSION['score']=$score;
}
?>

<html>
<head>
<title>Sudoku Puzzle</title>
<style>

h1{
text-align: center;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
color:blueviolet
}
.b{
    height: 50px;
    font-family:'times new roman';
    font-size:20px;
    width:150px;
    position:absolute;
    top:20px;
    right:80px;
    background-color:lightpink
}
#waiting_time{
font-size: 20px;
position:absolute;
right:380px;
top:230px;
background-color:palevioletred; 
  border-radius: 5PX;
}
#submit{
font-size: 20px;
position:absolute;
right:370px;
top:280px;
background-color:palevioletred; 
  border-radius: 5PX;
}
p{
font-size:30px;
position:absolute;
right:230px;
top:150px; 
color:blue;
}
#cross{
	text-align: center;
	width:30px;
	height:30px;
	margin: 0;
	padding: 0;
	border-collapse: collapse;
	border: 1px solid white;
}
#buttons{
	width:30%;
	float: right;
}
tr{
	margin: 30px;
	padding:30px;
	border-collapse:separate;
}
td{
	height: 40px;
	width: 40px;
}
#leftBox{
	position: absolute;
  top:100px;
  left:300px;
}
#rightBox{
	position: absolute;
  bottom:150px;
  right:200px;
}
.butt{
	height:50px;
	width: 107px;
	font-size: 30px;
	background-color:#c00022;
    color:grey;
}
#puzzel{
	text-align: center;
	margin: 0;
	padding: 0;
	border-collapse: collapse;
	border: 1px solid black;
}
.inputBox{
	text-align: center;
		width: 40px;
		height:40px;
		border: 1px solid black;
		text-align: center;
}
body{
	background-image: url(https://media.architecturaldigest.com/photos/5e964cf3edda05000872a03d/4:3/w_3200,h_2400,c_limit/PatternPuzzle-Group-Silo-02-DDPP_3600x@2x.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	}
</style>

<script>
//Globals
var clue=0;
var check=0;
var p;
var timeleft = 420;
var currentTextInput;
var puzzelArrayData;
var puzzle=preparePuzzleArray(); 
//Loads the Crossword
function initializeScreen(){
	var puzzelTable = document.getElementById("puzzel");
	puzzelArrayData = preparePuzzelArray();
	for ( var i = 0; i < puzzelArrayData.length ; i++ ) {
		var row = puzzelTable.insertRow(-1);
		var rowData = puzzelArrayData[i];
		for(var j = 0 ; j < rowData.length ; j++){
			var cell = row.insertCell(-1);
			if(rowData[j] != 0){
				var txtID = String('txt' + '_' + i + '_' + j);
				cell.innerHTML = '<input type="number" class="inputBox" min="1" max="9" maxlength="1" style=""'  + 'id="' + txtID + '" onfocus="textInputFocus(' + "'" + txtID + "'"+ ')">';  
			}
		}
	}
}
//Stores ID of the selected cell into currentTextInput
function textInputFocus(txtID123){
	currentTextInput = txtID123;
	}
function preparePuzzleArray(){
var a= [['3',null,'6', '5',null,'8','4',null,null],
         ['5', '2', null, null, null, null, null, null, null],
         [null, '8','7',null,null,null,null,'3','1'],
         [null, null, '3', null,'1', null, null, '8', null],
         ['9', null, null, '8', '6', '3', null, null, '5'],
         [null, '5', null, null, '9', null, '6', null, null],
         ['1', '3', null, null, null, null, '2', '5', null],
         [null,null,null, null, null, null, null, '7', '4'],
         [null ,null, '5', '2', null, '6', '3', null, null]];

		  var b=  [['4',null,'9', '5',null,'8','4',null,null],
         ['9', '2', null,'0', null, null, null, null, null],
         [null, '8','7',null,null,null,null,'3','1'],
         [null, null, '3', null,'1', null, null, '8', null],
         ['9', null, null, '8', '6', '3', null, null, '5'],
         [null, '5', null, null, '9', null, '6', null, null],
         ['1', '3', null, null, null, null, '7', '5', null],
         [null,null,null, null, null, null, null, '7', '4'],
         [null ,null, '5', '2', null, '6', '3', null, null]];

		  var c=  [[null,'8','6', '5',null,'8','4',null,null],
         ['5', '2', null, null, null, null, null, null, null],
         [null, '8','7',null,null,null,null,'3','1'],
         [null, null, '3', null,'1', null, null, '8', null],
         ['9', null, null, '8', '6', '3', null, null, '5'],
         [null, '5', null, null, '9', null, '6', null, null],
         ['1', '3', null, null, null, null, '2', '5', null],
         [null,null,null, null, null, null, null, '7', '4'],
         [null ,null, '5', '2', null, '6', '3', null, null]];
		  var items = [a,b,c];
var item = items[Math.floor(Math.random() * items.length)];
return item;
p=item;
}
//Returns Array

function preparePuzzelArray(){
var a= [['3','1','6','5','7','8','4','9','2'],
          ['5','2','9','1','3','4','7','6','8'],
          ['4','8','7','6','2','9','5','3','1'],
          ['2','6','3','4','1','5','9','8','7'],
          ['9','7','4','8','6','3','1','2','5'],
          ['8','5','1','7','9','2','6','4','3'],
          ['1','3','8','9','4','7','2','5','6'],
          ['6','9','2','3','5','1','8','7','4'],
          ['7','4','5','2','8','6','3','1','9']];

		  var b= [['3','1','6','5','7','8','4','9','2'],
          ['5','2','9','1','3','4','7','6','8'],
          ['4','8','7','6','2','9','5','3','1'],
          ['2','6','3','4','1','5','9','8','7'],
          ['9','7','4','8','6','3','1','2','5'],
          ['8','5','1','7','9','2','6','4','3'],
          ['1','3','8','9','4','7','2','5','6'],
          ['6','9','2','3','5','1','8','7','4'],
          ['7','4','5','2','8','6','3','1','9']];

		  var c= [['3','1','6','5','7','8','4','9','2'],
          ['5','2','9','1','3','4','7','6','8'],
          ['4','8','7','6','2','9','5','3','1'],
          ['2','6','3','4','1','5','9','8','7'],
          ['9','7','4','8','6','3','1','2','5'],
          ['8','5','1','7','9','2','6','4','3'],
          ['1','3','8','9','4','7','2','5','6'],
          ['6','9','2','3','5','1','8','7','4'],
          ['7','4','5','2','8','6','3','1','9']];
		  var items = [a,b,c];
var item = items[Math.floor(Math.random() * items.length)];
return item;
for(let i=0;i<=8;i++){
	for(let j=0;j<=8;j++){
	if (p[i][j]!=null){
		if(p[i][j]==a[i][j]){
			return a;
		}
		if(p[i][j]==b[i][j]){
			return b;
		}
		if(p[i][j]==c[i][j]){
			return c;
		}
		
	}
	}

}
}
//Clear All Button
function clearAllClicked(){
	score=100-clue-2*check;
	document.getElementById('score').value=score;
	document.getElementById('time').value=timeleft;
	window.open("score_u.php");

}
//Check button
function checkClicked(){
	check++;
	for ( var i = 0; i < puzzelArrayData.length ; i++ ) {
		var rowData = puzzelArrayData[i];
		for(var j = 0 ; j < rowData.length ; j++){
			if(rowData[j] != null){
				var selectedInputTextElement = document.getElementById('txt' + '_' + i + '_' + j);
				if(selectedInputTextElement.value != puzzelArrayData[i][j]){
					selectedInputTextElement.style.backgroundColor = 'red';
				}else{
					selectedInputTextElement.style.backgroundColor = 'white';
				}
			}
		}
	}
}
//Clue Button
function clueClicked(){
	clue++;
	if (currentTextInput != null){
		var temp1 = currentTextInput;
		var token = temp1.split("_");
		var row = token[1];
		var column = token[2];
		document.getElementById(temp1).value = puzzelArrayData[row][column];
		//checkClicked();
	}
}
function solveClicked(){
	check=check+30;
	if (currentTextInput != null){
		// Print elements on top
		for(i= 0; i <= 8; i++){
			for(j = 0; j <= 8; j++){
				document.getElementById('txt' + '_' + i + '_' + j ).value = puzzelArrayData[i][j];
				}}}
}
function solve(){
	if (currentTextInput != null){
		// Print elements on top
		for(i= 0; i <= 8; i++){
			for(j = 0; j <= 8; j++){
				document.getElementById('txt' + '_' + i + '_' + j ).value = puzzle[i][j];;
				}}}			
}
  function start(){
	solve();
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
	if(timeleft==0){
		clearAllClicked();
	}
}
</script>
</head>
<body onload="initializeScreen()">
	
		<div id="timer">
			<p> Time remaining :<span id="countdowntimer">  </span> seconds</p>
			 <button type="button" id="waiting_time" onclick="start()">Start</button>
			 <input class="b" type="submit" name=logout onclick="location='howtoplaysudoku.php'" value="HOW TO PLAY">
		</div>
<div id="leftBox">
<table id="puzzel">
</table>
</div>
<div id="rightBox">
<table>
<tr>
	<td><input class="butt"  type="submit" value="Check" onclick="checkClicked()"></td>
	<td><input class="butt"  type="submit" value="Solve" onclick="solveClicked()"></td>
	<td><input class="butt"  type="submit" value="Clue" onclick="clueClicked()"></td></tr>
</table>
</div>
</body>
<html>
<body>
<form action="" method="post">
    <input hidden type="text"  id="score" name="score" value="">
		<input hidden type="text"  id="time" name="time" value="">
		<button type="submit" id="submit" name="submit" onclick="clearAllClicked()">Submit</button>
            </form>
</body>
</html>
</html>
