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
 
  <table align="center">
  <tr><td><img  align="center"  src="images/presc4.jpg" ></td></tr>
</table>
  <br />
 
<?php
include"bdd.php";
{
$sql2 = "select  medication.patientid,medication.doctorname,patient.patientfirstname,medicationname,prescription from medication,patient where patient.patientid=medication.patientid and medication.patientid='".$_POST["medicalnumber"]."' and medication.orderdate = '".$_POST["orderdate"]."' ";
$sql3 = "select distinct  patient.patientid,patient.doctorname,patient.patientfirstname from patient where  patient.patientid='".$_POST["medicalnumber"]."'  ";
$sql = mysql_query($sql3) or die(mysql_error());
while($row = mysql_fetch_array($sql)){
echo "<center><table border=0 width=55%><tr><td> Medical Number : ". $row['patientid'] ."</td>";
echo "<td> Patient Name  : ". $row['patientfirstname'] ."</td></tr>";
echo "<tr><td colspan=2> Doctor Name  : ". $row['doctorname'] ."</td></tr></table></center>";

}
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" NO MEDICATION REQUESTED FOR THIS PATIENT \")</script>";
    // Affichage des produits
  else { ?>
<br /><br />
     <TABLE  align="center"  width="30%" border="1">
<?php

  echo "<th><b>MEDICATION NAME</b><th><b>PRESCRIPTION</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[3] . "<td><center>" . $data[4];
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
 <br /><br /><br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";
?>
<html>
 
<head>
 <title>New Page 1</title>
 <script language="javascript">
 function printpage()
  {
   window.print();
  }
 </script>
 </head>
 
<body>
 
<form>
 <input type="button" value="Print" onClick="printpage();">
 </form>
 </body>
 
</html>