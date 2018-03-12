<?php session_start(); ?>

<html>  
    <head> <title>HOMEPAGE</title></head>
    <body>
          <form method="post" action="validatetry1.php">
               <center><h1> Inventory Management System for PCBDG</h1>
               <b>Please enter your ID and code.</b> <br> <br>
               <table width="180" cellspacing="1" cellpadding="1" border="0">
               <tr>
                   <td><font face="arial" size="2" color="#000000">ID</font></td>
                   <td><font face="arial" size="2" color="#000000">:</font></td>
                   <td><input type="text" name="ID" size="15"></td>
               </tr>
               <tr>
                    <td><font face="georgia" size="2" color="#000000">Password</font></td>
                    <td><font face="georgia" size="2" color="#000000">:</font></td>
                    <td><input type="password" name="password" size="15"></td>
               </tr>
               <tr>
                     <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                     <td colspan="2">&nbsp;</td>
                     <td align="center"><input type="submit" value="Enter">
                                        <input type="reset" value="Clear"></td>
              </tr> 
              </table> 

              <br> <br> <font color="red"> 
                   <?php 
                         if(!empty($_GET['error'])){
                         if($_GET['error'] == "1"){
                               echo "Login and Password are empty!";  }   
                         else if($_GET['error'] == "2"){
                               echo "Invalid user!";   }    
                         else{
                               echo "Session expired!";
                          } } 
                    ?> 
                </font> </font> 
                </center>
          </form> 
    </body> 
</html>
<?php session_destroy(); ?>