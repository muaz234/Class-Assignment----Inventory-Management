
<html>
  <head>
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
    <title>Search  Item By Name</title>
  </head>
  <p><body>
    <p><center><h3>Search  Menu</h3>
    <p>You  may search by name</p>
    <form  method="post" action="search.php?go"  id="searchform">
      <input  type="text" name="name">
      <input  type="submit" name="submit" value="Search"></center></p>
    </form>
<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
  $name=$_POST['name'];
  // connect to the database
  include('connect-db.php');

 // get results from database
	$result = mysql_query("SELECT  name, quantity, price,type FROM inventory WHERE name LIKE '%" . $name .  "%'")
		or die(mysql_error());
		echo "<center>";
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>NAME</th> <th>QUANTITY</th> <th>(RM)PRICE/1</th><th>TYPE</th></tr>";
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $name  =$row['name'];
          $quantity=$row['quantity'];
          $price=$row['price'];
          $type=$row['type'];
  //-display the result of the array
                echo "<tr>";
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['quantity'] . '</td>';
		echo '<td>' . $row['price'] . '</td>';
		echo '<td>' . $row['type'] . '</td>';
                echo "</tr>";
	}

	// close table>
	echo "</table>";
	echo "</center>";
  }
  }
  else{
  echo  "<p>not found!</p>";
  }
  }


?>
<center>
<a href="inventory.php">back</a>

  </body>
</html>
</p>
