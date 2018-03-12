<?php

if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$type = $_POST['type'];
if($name !=''&& $quantity !=''&& $price !=''&& $type !='')
{
echo "Sent";
//  To redirect form on a particular page
header("Location:menutry2.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>