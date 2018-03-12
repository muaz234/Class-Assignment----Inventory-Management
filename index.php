<?php
/* index.php allows user to create a new entry in the database */

 // creates the new user form
 function renderForm($temp_name,$temp_quantity, $temp_price,$temp_type,$error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Record & Adjustment Purchases Inventory</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 

 <form action="" method="post">
 <div>
 <br><br><br><br><br></br><center>
  <h2>Purchase Bill Form</h2>
 <strong>Item name:*</strong> <input type="text" name="temp_name" value="<?php echo $temp_name; ?>" /><br/>
 <strong>Quantity :*</strong> <input type="text" name="temp_quantity" value="<?php echo $temp_quantity; ?>" /><br/>
 <strong>Price   :*</strong> <input type="text" name="temp_price" value="<?php echo $temp_price; ?>" /><br/>
 <strong>Type     :*</strong> <input type="text" name="temp_type" value="<?php echo $temp_type; ?>" /><br/>

 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </center>
 </div>
 </form>
 </body>
 </html>
 <?php
 }




 // connect to the database
 include('connect-db.php');

 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 {
 // get form data, making sure it is valid
 $temp_name = mysql_real_escape_string(htmlspecialchars($_POST['temp_name']));
 $temp_quantity = mysql_real_escape_string(htmlspecialchars($_POST['temp_quantity']));
 $temp_price = mysql_real_escape_string(htmlspecialchars($_POST['temp_price']));
 $temp_type = mysql_real_escape_string(htmlspecialchars($_POST['temp_type']));


 // check to make sure both fields are entered
 if ($temp_name == '' || $temp_quantity == '' || $temp_price =='' || $temp_type =='' )
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';

 // if either field is blank, display the form again
 renderForm($temp_name,$temp_quantity, $temp_price,$temp_type,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT temp SET temp_name='$temp_name',temp_quantity='$temp_quantity', temp_price='$temp_price',temp_type='$temp_type'")
 or die(mysql_error());

 // once saved, redirect back to the view page
 header("Location: menutry2.php");
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','');
 }
?>