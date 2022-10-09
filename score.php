<!DOCTYPE html>
<html>
	<head>
		<title>WORLD OF PUZZLES</title>
	</head>
	<body>
		<style>
				body{
	background-image: url('https://www.rd.com/wp-content/uploads/2020/01/GettyImages-87487497-e1579034836695-scaled.jpg');
background-repeat: no-repeat;
background-size: cover;}
			h2{
				font-weight: 500;
    line-height: 42px;
    font-size:30px;
    text-align: center;
    background-color:black;
    color: #ff0066;
    font-family: 'algerian';}
			}
table, th, td {
  border: 5px solid #800000;
  border-collapse:10px;
  text-align:center;
}
th, td {
   background-color: #800000;
   border: 2px solid #800000;
}
.butt{
    height: 50px;
    font-family:'times new roman';
    font-size:20px;
    width:150px;
    position:absolute;
    top:20px;
    right:80px;
    background-color:lightpink
}



}</style>
		<h2>LEADER BOARD</h2>
		<table style="border:5px solid #800000;margin-left:auto;margin-right:auto;">
		<tr style="font-size:40px;font-family:'Poppins';color: #ffbb99">
				<td >Ranking</td>
				<td>UserName</td>
				<td>Score</td>
				<td>Time Taken</td>
			</tr>
            <input class="butt" type="submit" name=logout onclick="location='homepage.php'" value="LOG OUT">
 <?php
$con = mysqli_connect("localhost","root","", "worldofpuzzles");
$result = mysqli_query($con, "SELECT name,score,time FROM score wheres ORDER BY score+time/2 DESC ");
$ranking = 1;
if (mysqli_num_rows($result)) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr style='font-size:30px;color:pink'><td>{$ranking}</td>
		<td>{$row['name']}</td>
		<td>{$row['score']}</td>
		<td>{$row['time']}</td><</tr>";
		$ranking++;
	}
}
?>
</body></html>