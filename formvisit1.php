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
$sql2 = "select investigation.investigationid,patient.patientid,patient.patientfirstname,investigation.date,investigation.history,investigation.chiefcomplaint,investigation.physicalexam,investigation.diagnosis from patient,investigation where investigation.patientid=patient.patientid and patient.patientid='".$_POST["MEDICALNUMBER"]."' ";
$res = mysql_query($sql2);
$sql3="select patient.patientid,patient.patientfirstname,patient.doctorname from patient where patient.patientid='".$_POST["MEDICALNUMBER"]."' ";
$result = mysql_query($sql3) or die(mysql_error());
while($row = mysql_fetch_array($result)){
echo "<tr><td><center><h2><br> <u>ALL VISIT'S HISTORY REPORT</u></h2></center><center> </td></tr></table></center>";
echo "<center><table><tr><td><b> Medical Number :</b> ". $row['patientid'] ."</td><td><b> Doctor Name : </b> ". $row['doctorname'] ."</td></tr>";
echo "<tr><td><b>Patient Name :</b> ". $row['patientfirstname'] ."</td></tr></table>";
}
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" NO RESULT FOUND \")</script>";
    // Affichage des produits
  else { ?>
<br>
     <TABLE  border="1"align="center" >
<?php

  echo "<th><b>OR</b></th><th><b>VISIT DATE</b></th><th><b>HISTORY</b></th><th><b>CHIEF COMPLAINT</b></th><th><b>PHYSICAL EXAM</b></th><th><b>DIAGNOSIS</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5]. "<td><center>" . $data[6]. "<td><center>" . $data[7];
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

  //?><br /><br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<center><table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>

 </form>

