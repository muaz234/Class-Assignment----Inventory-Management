<?php
/* NEW.PHP Allows user to create a new entry in the database */

 // creates the new user form
 function renderForm($id,$first, $last,$phone,$address,$error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New User</title>
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
 <div><center>
 <strong>ID: *</strong> <input type="text" name="id" value="<?php echo $id; ?>" /><br/>
 <strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $first; ?>" /><br/>
 <strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $last; ?>" /><br/>
 <strong>Phone: *</strong> <input type="text" name="phone" value="<?php echo $phone; ?>" /><br/>
 <strong>Address: *</strong> <input type="text" name="address" value="<?php echo $address; ?>" /><br/>
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
 $id = mysql_real_escape_string(htmlspecialchars($_POST['id']));
 $firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));
 $lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));
 $phone = mysql_real_escape_string(htmlspecialchars($_POST['phone']));
 $address = mysql_real_escape_string(htmlspecialchars($_POST['address']));
 
 // check to make sure both fields are entered
 if ($id==''|| $firstname == '' || $lastname == '' || $phone=='' || $address =='' )
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';

 // if either field is blank, display the form again
 renderForm($id,$firstname, $lastname,$phone,$address, $error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT players SET id='$id',firstname='$firstname', lastname='$lastname',phone='$phone',address='$address'")
 or die(mysql_error());

 // once saved, redirect back to the view page
 header("Location: viewuser.php");
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','');
 }
?>