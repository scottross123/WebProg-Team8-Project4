<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Parking</title>
    <link rel="stylesheet" href="./orders.css">
</head>
<body>
    <div class="main"><img src="./Compact.jpg" alt="Compact" width="700px" height="400px">
    <form action="mainpage.php" method="post">
		<h3>Chose Parking</h3>
		<p>Time: <input name="time" type="text" placeholder="X day"></p>
        <P>Accomdations needed?: <input type="checkbox" name="Accomdation" value="acc"></P>
        <p>VIP?: <input type="checkbox" name="VIP" value="vip"></p>
		<input type="submit"  value="Order!">
		<a href="./mainpage.php"><input type="button" value="back to main"></a>
		</form>
    </div>
</body>