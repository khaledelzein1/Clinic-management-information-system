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
  <tr><td><img  align="center"  src="images/appoin.jpg" ></td></tr>
</table>
<?php
include"bdd.php";
{
$sql2 = "select patient.patientid,patient.patientfirstname,patient.registernumber,reservation1.doctorname,reservation1.reservationdate,reservation1.reservationtime from patient,reservation1 where patient.patientid=reservation1.patientid   and patient.patientid='".$_POST["id1"]."' and reservation1.getdate= '".$_POST["id2"]."' order by reservation1.reservationtime ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"<script>alert(\" ATTENTION: NO APPOINTMENT THIS DAY FOR THIS PATIENT\")</script>";
    // Affichage des produits
  else { ?>
<br>
     <TABLE  border="1"align="center" >
<?php

  echo " <th><b>MR</b></th><th><b>PATIENT NAME</b></th><th><b>REGISTER </b></th><th><b>DOCTOR NAME</b></th><th><b>DATE</b></th><th><b> TIME</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" . $data[0]. "<td><center>" . $data[1]. "<td><center>" . $data[2]. "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5];
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

