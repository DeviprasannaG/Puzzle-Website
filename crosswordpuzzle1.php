<?php
include 'home.php';
$name=$_SESSION['name'];
if(isset($_POST["submit"])) 
{
    $score = $_POST['score'];
	$time = $_POST['time'];
$query = "INSERT INTO score(name,score,time)VALUES('$name','$score','$time')";
$run = mysqli_query($con,$query) or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cross word Puzzle</title>
<style>
	h1{
	text-align: center;
	font-family:Georgia, 'Times New Roman', Times, serif;
	color:black;
	}
	#waiting_time{
	font-size: 20px;
	position:absolute;
	right:380px;
	top:230px;
	background-color: #4CAF50; 
	  border-radius: 5PX;;
	  color: white;
	}
	h2{
	font-size: 25px;
	position:absolute;
	right:340px;
	top:150px;
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
		float: right;}
	tr{
		margin: 30px;
		padding:30px;
		border-collapse:separate;	}
	td{
		height: 40px;
		width: 40px;}
	#leftBox{
		position: absolute;
	  top:100px;
	  right:700px;	}
	#rightBox{
		position: absolute;
	  bottom:50px;
	  right:150px;	}
	.butt{
		height:50px;
		width: 107px;
		background-color: rgb(50, 235, 241);	}
	#puzzel{
		text-align: center;
		margin: 0;
		padding: 0;
		border-collapse: collapse;
		border: 1px solid black;	}
	.inputBox{
		text-align: center;
			width: 40px;
			height:40px;
			border: 1px solid black;
			text-align: center;	}
	body{
		background-image: url(https://i.pinimg.com/originals/f1/ef/10/f1ef10a0b51fbcec41fc4a891cf8db28.jpg);
		background-repeat: no-repeat;
		height: 100%;
		background-size: cover;	}
	#hintsTable{
	width: 480px;
	position:absolute;
	font-size: 18px;
	top:300px;
	right:100px;
	clear:left;}
	</style>

<script>
//Globals
var clue=0;
var check=0;
var timeleft=420;
var currentTextInput;
var puzzelArrayData;
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
				cell.innerHTML = '<input type="text" class="inputBox" maxlength="1" style="text-transform: lowercase" ' + 'id="' + txtID + '" onfocus="textInputFocus(' + "'" + txtID + "'"+ ')">';
			}else{
				cell.style.backgroundColor  = "black";
			}}
	}
	addHint();
}
//Adds the hint numbers
function addHint(){
	document.getElementById("txt_0_4").placeholder = "1";
	document.getElementById("txt_2_6").placeholder = "2";
	document.getElementById("txt_3_1").placeholder = "3";
	document.getElementById("txt_3_9").placeholder = "4";
	document.getElementById("txt_6_2").placeholder = "5";
	document.getElementById("txt_9_0").placeholder = "6";
}
function textInputFocus(txtID123){
	currentTextInput = txtID123;}
function preparePuzzelArray(){
var items = [	[0, 0, 0, 0, 'p', 0, 0, 0, 0, 0],
				[0, 0, 0, 0, 'u', 0, 0, 0, 0, 0 ],
				[0, 0, 0, 0, 'n', 0, 'b', 0, 0, 0],
				[0, 'h', 'y', 'd', 'e', 'r', 'a', 'b', 'a', 'd'],
				[0, 0, 0, 0, 0, 0, 'n', 0, 0, 'e'],
				[0, 0, 0, 0, 0, 0, 'g', 0, 0, 'l'],
				[0, 0, 'm', 'u', 'm', 'b', 'a', 'i', 0, 'h'],
				[0, 0, 0, 0, 0, 0, 'l', 0, 0, 'i'],
				[0, 0, 0, 0, 0, 0, 'o', 0, 0, 0],
				['k', 'a', 's', 'h', 'm', 'i','r', 0, 0, 0],
				[0, 0, 0, 0, 0, 0, 'e', 0, 0, 0]];return items;}
//Clear All Button
function clearAllClicked(){
	currentTextInput = '';
	id("lives").textContent = "crossword puzzles ";
	var puzzelTable = document.getElementById("puzzel");
	puzzelTable.innerHTML = '';
    initializeScreen();}
function id(id) {
return document.getElementById(id);}
//Check button
function checkClicked(){
	var count=0;
	for ( var i = 0; i < puzzelArrayData.length ; i++ ) {
		var rowData = puzzelArrayData[i];
		for(var j = 0 ; j < rowData.length ; j++){
			if(rowData[j] != 0){
				var selectedInputTextElement = document.getElementById('txt' + '_' + i + '_' + j);
				if(selectedInputTextElement.value != puzzelArrayData[i][j]){
					selectedInputTextElement.style.backgroundColor = 'red';
					
				}else{
					if(selectedInputTextElement.style.backgroundColor = 'white'){
					
					count++;
					document.getElementById("insert").innerHTML=count;q
				}}}}}}
//Clue Button
function clueClicked(){
	clue++;
	if (currentTextInput != null){
		var temp1 = currentTextInput;
		var token = temp1.split("_");
		var row = token[1];
		var column = token[2];
		document.getElementById(temp1).value = puzzelArrayData[row][column];
		}}
function solveClicked(){
	check=check+20;
	if (currentTextInput != null){
		var temp1 = currentTextInput;
		var token = temp1.split("_");
		var row = token[1];
		var column = token[2];
		var count=0;
		
		// Print elements on top
		for(j = row; j >= 0; j--){
			if(puzzelArrayData[j][column] != 0){
				document.getElementById('txt' + '_' + j + '_' + column).value = puzzelArrayData[j][column];
				}else break;	}
		// Print elements on right
		for(i = column; i< puzzelArrayData[row].length; i++){
			if(puzzelArrayData[row][i] != 0){
				document.getElementById('txt' + '_' + row + '_' + i).value = puzzelArrayData[row][i];
				}else break;}	
		// Print elements below
		for(m = row; m< puzzelArrayData.length; m++){
			if(puzzelArrayData[m][column] != 0){
				document.getElementById('txt' + '_' + m + '_' + column).value = puzzelArrayData[m][column];
				}else break;	}
		// Print elements on left
		for(k = column; k >= 0; k--){
			if(puzzelArrayData[row][k] != 0){
				document.getElementById('txt' + '_' + row + '_' + k).value = puzzelArrayData[row][k];
				}else break;	}
		// Done!
		
	}
}
function exitclicked(){
		score=100-clue-2*check;
	document.getElementById('score').value=score;
	document.getElementById('time').value=timeleft;
	window.open("score_u.php");
}
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
	if(timeleft==0){
		exitClicked();
	}

</script>
</head>
<body onload="initializeScreen()">
	<div id="timer">
		<p> Time remaining :<span id="countdowntimer"> 60 </span> seconds</p>
		
	</div>
	<input class="b" type="submit" name=logout onclick="location='homepage.php'" value="HOW TO PLAY">
<div id="leftBox">
<table id="puzzel">
<p id="lives"></p>
</table>
</div>
<div id="rightBox">
<table>
	<tr><td><input class="butt"  type="submit" value="Clear All" onclick="clearAllClicked()"></td>
	<td><input class="butt"  type="submit" value="Check" onclick="checkClicked()"></td>
	<td><input class="butt"  type="submit" value="Solve" onclick="solveClicked()"></td>
	<td><input class="butt"  type="submit" value="Clue" onclick="clueClicked()"></td></tr>
	<td><input class="butt" type="submit" value="exit" onclick="exitclicked()"></td></tr>
</table>
</div>
<table id="hintsTable">
		<tr>
			<td><strong>Horizontal:</strong></td><td><strong>Vertical:</strong></td>
		</tr>
		<tr>
			<td>3. Cultural Hub </td><td>1. Education Hub </td>
		</tr>
		<tr>
			<td>5. India's financial capital </td><td>2. Information Technology Hub </td>
		</tr>
		<tr>
			<td>6. Saffron region </td><td>4. Capital of India </td>
		</table>
		<form action="" method="post">
		<input hidden type="text"  id="score" name="score" value="">
			<input hidden type="text"  id="time" name="time" value="">
			<button type="submit" id="submit" name="submit" onclick="exitclicked()">Submit</button>
				</form></body></html>
				