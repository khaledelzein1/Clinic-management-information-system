<?php
  include"session.php";
  include"bdd.php";


$u=$_SESSION["userid"];
$p=$_SESSION["password"];
  $sql = "select *from plus_signup where userid='".$u."' and password='".$p."';";
  $res = mysql_query($sql,$link);
  if ($_SESSION["userid"]==false)
       {
           echo "<br><b>ATTENTION YOU CAN NOT ACCESS</b>";
exit;
}

  ?>


<?php
 
  include"bdd.php";
?>


<html>
<body  topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
   
      </td>
<td width="99%" valign="top"><br>
<p align="left" style="margin-left: 20"><font face="Arial" size="4" color="#B87060">
<table align="center"><tr><td><img src="image/logoUSM.gif"></td><td><h2>cleaning is our business,care is our concerne</h2></td></table>
<form action="medical.php" method=POST>
<TABLE ALIGN=CENTER BORDER= 3  background="image/8.jpg"  BGCOLOR="#B87060">
<tr>
<TD><center> <h1>MEDICAL NUMBER:</h1></center>
<input type=text name="id1" size=30><br><br>
&nbsp &nbsp &nbsp &nbsp     <input type="submit" name="bt_search" value="Envoyer">
<input type="RESET" value="Annuler">
</table>
</form> <br><br><br>



