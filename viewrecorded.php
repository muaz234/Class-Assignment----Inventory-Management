<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>View Recorded Item and Supplies</title>
</head>
<body><center><h1>Recorded Borrow and Return from AA</h1></center>

<?php
   // connect to the database
	include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM inventory")
		or die(mysql_error());

    echo "<center>";
    echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>NAME</th> <th>QUANTITY</th> <th>(RM)PRICE/1</th><th>TYPE</th><th>STATUS</th> <th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {

		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['quantity'] . '</td>';
		echo '<td>' . $row['price'] . '</td>';
		echo '<td>' . $row['type'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
		echo '<td><a href="app.php?name=' . $row['name'] . '">app</a></td>';


                echo "</tr>";
	}

	// close table>
	echo "</table>";
	echo "</center>";
?>
<center>

 <a href="menutry1.php">Main Menu</a>

</body>
</html>
