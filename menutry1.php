<?php
   session_start();

   if(!empty($_SESSION['ID']) && !empty($_SESSION['password'])){
     if($_SESSION['ID'] == 'mira' && $_SESSION['password'] == 'ali'){
?>

<html>
      <head> <title>LabManager</title>

      </head>
      <body>
           <form method="post" action="logintry1.php">
            <center> <br> <br>
            <b>This is menu for lab researcher</b>
            <br> <br> <b>NAME</b>: <?php echo $_SESSION['ID']; ?>

      <br> <br>

      <ul id="main_menu">
			<li><a href="inventory.php" >View Inventory</a></li>
			<li><a href="viewuser.php" >Add/Delete Account</a></li>
			<li><a href="approve.php" >Approval</a></li>

      </ul>




      <tr> <td colspan="2">&nbsp;</td>
           <td align="center">
               <input type="submit" value="Logout">
           </td>
      </tr>
      </table>
  </center>
</form>

</font>
</body>
</html>

<?php
   }    else{     header("location:logintry1.php?error=2");
   } }
        else {   header("location:logintry1.php?error=3");
} ?>