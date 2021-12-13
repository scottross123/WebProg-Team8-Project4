<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="pro.css">
</head>
<body>
    <div class="main">
    <h1>Your Order:</h1>
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
    $sql = "SELECT * from cars where username='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
		 $username=$row["username"];
		 $color=$row["color"];
		 $time=$row["time"];
		 $type=$row["type"];
         $price=$row["price"];
         echo "<ul><li>Username: ".$username."</li><li>Car color: ".$color."</li><li>Rental time: ".$time."</li><li>Type: ".$type."</li><li>Price: ".$price."$</li></ul>";
     }
} else {
    echo "There is no rental car history, you need to order first!";
}
?> 
<p></p>
<a href="pay.php"><input type="button" value="pay"></a>
<a href="./mainpage.php"><input type="button" value="Back to main page"></a>
<a href="clear.php"><input type="button" value="Clear my shoping cart"></a>
</div>
</body>
</html>
