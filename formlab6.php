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
<?php
include"bdd.php";
{
$sql2 = "select xray.xrayid,patientfirstname,xray.xrayname,xray.orderdate from patient,xray where patient.patientid=xray.patientid and xray.patientid='".$_POST["medicalnumber"]."' and xray.orderdate between '".$_POST["fromdate"]."' and '".$_POST["todate"]."' ";
$res = mysql_query($sql2);
$sql3 = "select distinct  patient.patientid,patient.doctorname,patient.patientfirstname from patient where  patient.patientid='".$_POST["medicalnumber"]."'  ";
$sql = mysql_query($sql3) or die(mysql_error());
while($row = mysql_fetch_array($sql)){
echo "<center><table border=0 width=55%><tr><td> Medical Number : ". $row['patientid'] ."</td>";
echo "<td> Patient Name  : ". $row['patientfirstname'] ."</td></tr>";
echo "<tr><td colspan=2> Doctor Name  : ". $row['doctorname'] ."</td></tr></table></center>";

}
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" ATTENTION: NO RESULT FOUND \")</script>";
    // Affichage des produits
  else { ?>
<br><br><br>
     <TABLE  border="1"align="center" >
<?php

  echo "<th><b>OR</b></th><th><b>X_RAY NAME</b></th><th><b>ORDER DATE</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td>" .
              $data[0] .  "<td>" . $data[2]. "<td>" . $data[3];
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

