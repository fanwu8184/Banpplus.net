<html>
<HEAD>
<TITLE>Bangplus</TITLE>
</HEAD>
<H1><B><p align="center"><font color="green" face="arial">Bangplus</font></p></B></H1>

<?php
session_start();
if($_SESSION['username'])
{
require_once ('menu.php');
require_once ('conmysql.php');

echo '<a href="storea.php">Store Ads</a>';


$sql="INSERT INTO STORE_ADS (fs_id, sa_date, sa_cost)
 VALUES
 ('$_POST[fs_id]','$_POST[sa_date]','$_POST[sa_cost]')";
 
if (!mysql_query($sql,$con))
   {
   die('Error: ' . mysql_error());
   }
 echo "<br><br>One Record Added";
 
mysql_close($con);
 ?> 

<?php
}
else
{
  echo 'You need to log in. <a href="index.php">Go To Home Page</a>';
}
?>
 </html>