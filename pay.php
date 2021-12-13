<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thanks!</title>
    <link rel="stylesheet" href="pro.css">
</head>
<body>

    <?php
        $servername = "localhost";
        $username = "zsun5";
        $password = "zsun5";
        $dbname = "zsun5";
        $user=$_SESSION['username'];
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
    $sql = "DELETE FROM cars WHERE username='$user'";
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error dropping table";
    };
    

?>
    <div class="main">

<?php  echo "Thanks ".$user." for your purchase!"; ?><br><br>
<a href="./mainpage.php"><input type="button" value="Return to main page"></a>
</div>
</body>
</html>
