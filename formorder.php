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
  <tr><td><img  align="center"  src="images/picvis.jpg" ></td></tr>
</table>
<?php
echo "<tr><td><center><h2><br> <u>X_RAY REPORT</u></h2></center><center> </td></tr></table></center>";
include"bdd.php";
{
$sql2 = "select xray.xrayid, patient.patientid,patientfirstname,xray.doctorname,xray.xrayname,xrayresult.resultxray,xray.orderdate,xrayresult.resultdate,xrayresult.drnote from patient,xray,xrayresult where patient.patientid=xray.patientid and xray.xrayid=xrayresult.xrayid and xray.xrayid='".$_POST["ordernumber"]."'";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" ATTENTION: NO RESULT FOR THIS ORDER \")</script>";
    // Affichage des produits
  else { ?>
<br>
     <TABLE  border="1"align="center" >
<?php

  echo "<th><b>OR</b></th><th><b>MR</b><th><b>PATIENT NAME</b></th><th><b>DOCTOR NAME</b></th><th><b>X_RAY NAME</b></th><th><b>X_RAY RESULT</b></th><th><b>DOCTOR NOTES</b></th><th><b>ORDER DATE</b></th><th><b>RESULT DATE</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td>" .
              $data[0] . "<td>" . $data[1]. "<td>" . $data[2]. "<td>" . $data[3]. "<td>" . $data[4]. "<td>" . $data[5]. "<td>" . $data[8]. "<td>" . $data[6]. "<td>" . $data[7];
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
 
<br /><br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>
 </form>

