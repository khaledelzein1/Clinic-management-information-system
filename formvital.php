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
include"bdd.php";
{
$sql2 = "select  vital.vitalid,vital.patientid,patient.patientfirstname,vital.doctorname,vital.visitdat,vital.temperature,vital.height,vital.weight,vital.respiratoryrate,vital.bodyposition,vital.bloodpressure,vital.heartstatus,vital.heart,vital.notes from patient,vital where vital.patientid=patient.patientid and vital.patientid='".$_POST["MEDICALNUMBER"]."' ";
$res = mysql_query($sql2);
$sql3="select patient.patientid,patient.patientfirstname,patient.doctorname from patient where patient.patientid='".$_POST["MEDICALNUMBER"]."' ";
$result = mysql_query($sql3) or die(mysql_error());
while($row = mysql_fetch_array($result)){
echo "<tr><td><center><h2><br> <u>VITAL SIGNS  REPORT</u></h2></center><center> </td></tr></table></center>";
echo "<center><table><tr><td><b> Medical Number :</b> ". $row['patientid'] ."</td><td><b> Doctor Name : </b> ". $row['doctorname'] ."</td></tr>";
echo "<tr><td><b>Patient Name :</b> ". $row['patientfirstname'] ."</td></tr></table>";
}

  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" NO RESULT FOUND \")</script>";
    // Affichage des produits
  else { ?>
<br><br><br>
     <TABLE  border="1"align="center" >
<?php

  echo "<th><b>TRANS ID</b></th><th><b>DATE</b></th><th><b>TEMP<br>(C)</b></th><th><b>HEIGHT<br>(cm)</b></th><th><b>WEIGHT<br>(kg)</b></th><th><b>RESPIRATORY</b></th><th><b>POSITION</b></th><th><b>BLOOD PRESSURE</b></th><th><b>HEART STATUS</b></th><th><b>HEART<br>(BPM)</b></th><th><b>NOTES</b></th>";
  
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[4]. "<td><center>" . $data[5]. "<td><center>" . $data[6]. "<td><center>" . $data[7]. "<td><center>" . $data[8]. "<td><center>" . $data[9]. "<td><center>" . $data[10]. "<td><center>" . $data[11]. "<td><center>" . $data[12]. "<td><center>" . $data[13];
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

