 <?php
    $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("projeek", $con);

$query = "select * from inventory where approved='0'";

$result=mysql_query($query);

$i = 1; //counter for the checkboxes so that each has a unique name
echo "<form action='process.php' method='post'>"; //form started here
echo "<br><br><br><br><br><center><table border='1'>
<tr>
<th> Name</th>
<th> Quantity</th>
<th> Price </th>
<th> Type</th>
<th> Status</th>
<th> Tick to Approve</th>
</tr></center>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['quantity'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";
  echo "<td><input type='checkbox' name='check[$i]' value='".$row['name']."'/>";
  echo "</tr>";
  }
echo "</table>";
echo "<input class='action' type='button' name='approve' value='approve' />";

   echo "<input type='hidden' name='action' value='' id='action' />";
echo "</form>";

mysql_close($con);
?>