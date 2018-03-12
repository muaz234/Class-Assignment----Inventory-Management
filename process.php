<?php
 if (isset($_POST['approve']))
{
    if (isset($_POST['check']))
    {
        foreach ($_POST['check'] as $value)
        {
            $sql = "UPDATE inventory SET approved = 1 WHERE name = $value"; //write this query according to your table schema
            mysql_query($sql) or die(mysql_error());

        }
    }
    else{     header("location:logintry1.php?error=2");
   }
}

?>