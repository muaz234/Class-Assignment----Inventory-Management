<?php
/* change.php allows user to create a new entry in the database */

 // creates the new user form
 function renderForm($name,$status,$error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Record Borrow and Return Inventory</title>
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
  <h2>Borrow/Return Form</h2>
  <strong>Item Name     :*</strong> <input type="text" name="name" value="<?php echo $name; ?>" /><br/>
  <strong>Status     :*</strong> <input type="text" name="status" value="<?php echo $status; ?>" /><br/>

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
 // get form data
 $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
 $status = mysql_real_escape_string(htmlspecialchars($_POST['status']));


 // check to make sure both fields are entered
 if ($name=='' || $status == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';

 // if either field is blank, display the form again
 renderForm($name,$status,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE inventory SET status ='$status' WHERE name = '$name' ")
 or die(mysql_error());

 // once saved, redirect back to the view page
 header("Location: index2.php");
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','');
 }
?>