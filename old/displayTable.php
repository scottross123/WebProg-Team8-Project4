
<?php
session_start();

?>
<html>

<head lang="en">
	<meta charset="UTF-8">
<title>Assignment Demo</title>

	<style>
		body{
			background-color: lightcyan;
		}
	table {
   border: 1px solid black;
	border-collapse: collapse;
}

th, td {
	border: 2px solid black;
    text-align: center;
    padding: 8px;
}
tr:nth-child(even){background-color: #a0a0a0}
tr:nth-child(odd){background-color: #ffffff}
tr:nth-child(1){font-weight: bold;}
	</style>
</head>

<body>

<?php
$servername = "localhost";
$username = "zsun5";
$password = "zsun5";
$dbname = "zsun5";
$user=$_SESSION['username'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from user where username='$user'";
$result = $conn->query($sql);
echo "<h3>Albums</h3>";
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Artist</th><th>Name</th><th>Genre</th><th>Release Date</th></tr>";
     while($row = $result->fetch_assoc()) {
		 $username=$row["username"];
		 $password=$row["password"];
		 $email=$row["email"];
		 $age=$row["age"];
		 $phone=$row["phone"];


         echo "<tr><td>".$username."</td><td>".$password."</td><td>".$email."</td><td>".$age."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "There is no Albums in DB, click add button and creat one";
}

$sql = "SELECT name,age FROM artists";
$result = $conn->query($sql);
echo "<h3>Artists</h3>";
if ($result->num_rows > 0) {
     // output data of each row
	echo "<table><tr><th>Artist</th><th>Age</th></tr>";
     while($row = $result->fetch_assoc()) {

		 $name=$row["name"];
		 $age=$row["age"];
         echo "<tr><td>".$name."</td><td>".$age."</td></tr>";
     }
	 echo "</table>";
} else {
     echo "There is no artists in DB, click add button and creat one";
}


$conn->close();
?>  

	<div>
</br>
	<a href="addArtist.php"><input type="button" id="btn1" value="Add Artist"></a>
	<a href="addAlbum.php"><input type="button" id="btn1" value="Add Album"></a>
	<a href="login.php"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	<a href="./main_menu.html"><input type="button" id="btn1" value="backe to menu"></a>
	</div>
</body>

</html>