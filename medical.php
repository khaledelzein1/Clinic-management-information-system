
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

<html>
<body  topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0">

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    
      </td>
<td width="99%" valign="top"><br>
<p align="left" style="margin-left: 20"><font face="Arial" color="#B87060" size="4"></font></p>
<p align="left" style="margin-left: 20"><font face="Arial" size="4" color="#B87060">
<?php
include"bdd.php";
{
$sql2 = "select patientid,patientfirstname,patientlastname from patient where patient.patientid = '".$_POST["id1"]."' ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" ATTENTION: MEDICAL NUMBER NOT VALID <br>MAKE SHURE THE REGISTRATION MODUL</br> \")</script>";
    // Affichage des produits
  else { ?>
<br>
     <TABLE BORDER align="left" BGCOLOR="#b87060">
<?php
echo "<CAPTION><b><h3>PATIENT FILE</h3></b></CAPTION>" ;
  echo "<th><b>MEDICAL NUMBER</b><th><b>FIRST NAME</b><th><b>LAST NAME</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td>" .
              $data[0] . "<td>" . $data[1]. "<td>".$data[2];
       echo $lig;
    }
    echo "</TABLE>";
  }
//$sql1 = "select idemployer,nameemployer,position from employer where employer.idemployer='".$_POST["txtsearch"]."'";
//$res1=mysql_query($sql1,$link);
//if(mysql_num_rows($res1)==0) echo"<br>Pas d'offre sur ce medicament";
//else{?>

<?php
         //$lig="";
         //for($n=0;$n<mysql_num_fields($res1);$n++)
         //$lig=$lig."<th>".mysql_field_name($res1,$n);
         //echo $lig;
         //for($n=0;$n<mysql_num_rows($res1);$n++){
         //$lig="<tr>";
         //$data1=mysql_fetch_row($res1);
         //for($j=0;$j<mysql_num_fields($res1);$j++)
         //$lig=$lig."<td>".$data1[$j];
         //echo $lig;}
         //echo"</table>";}

}

  //?>
 

 </form>

