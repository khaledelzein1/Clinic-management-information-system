
   <table >
  <tr><td><img  width="500"  src="images/appoin1.jpg" ></td></tr>
  <tr><td><center><h2><u>Patient History Reports</u></h2></center></td></tr>
</table>

  <legend><u>Patient Informations</u></legend><br />
  <?php
include"bdd.php";
{
$sql2 = "select patientid,patientfirstname,patientadresse,patientsexe,patientphone,patientbirthday from patient where patientid= '".$_POST["medicalnumber"]."'";
$res = mysql_query($sql2);
if (mysql_num_rows($res)==0)
      echo" NO INFORMATIONS FOR THIS PATIENT";
    // Affichage des produits
  else { ?>
     <TABLE  border="1" >
<?php

  echo "<th><b>MR</b><th><b>PATIENT NAME</b></th><th><b>ADRESS</b></th><th>GENDER</th><th><b>PHONE NUMBER</b></th><th><b>BIRTH DATE</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[1]. "<td><center>" . $data[2]. "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5];
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

  //?><br />
   <legend><u>Problems Lists</u></legend><br />
  <?php
include"bdd.php";
{
$sql2 = "select patient.patientid,patient.patientfirstname,investigation.date,doctor.doctorname,investigation.history,investigation.chiefcomplaint,investigation.physicalexam,investigation.diagnosis from patient,investigation,doctor where doctor.doctorid=investigation.doctorid and investigation.patientid=patient.patientid and patient.patientid='".$_POST["medicalnumber"]."' ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"ANY PROBLEMS FOR THIS PATIENT";
    // Affichage des produits
  else { ?>

     <TABLE  border="1" >
<?php

  echo "<th><b>MR</b><th><b>Name</b></th><th><b>Visit Date</b></th><th><b>Dr Name</b></th><th><b>History</b></th><th><b>Complain</b></th><th><b>Physical Exam</b></th><th><b>Diagnosis</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[1]. "<td><center>" . $data[2]. "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5]. "<td><center>" . $data[6]. "<td><center>" . $data[7];
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
  <br />

  <legend><u>All Orders Requested From Doctor</u></legend><br />
  <?php
include"bdd.php";
{
$sql2 = "select  orders.patientid,orderdate,doctor.doctorname,ordertype,ordername,notes from doctor,orders where  doctor.doctorid=orders.doctorid and  orders.patientid='".$_POST["medicalnumber"]."'  order by orderdate ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo"NO Orders REQUESTED FOR THIS PATIENT";
    // Affichage des produits
  else { ?>

<TABLE  border="1" >
<?php

  echo "<th><b>MR</b></th><th><b>Order Date</b></th><th><b>Dr Name</b></th><th><b>Order Type</b></th><th><b>Order Name</b></th><th><b>Notes</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[1]. "<td>" . $data[2]. "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5];
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
  <br />
 
   <br />
  <legend><u>Vital Signs History</u></legend><br />
  <?php
include"bdd.php";
{
$sql2 = "select vital.patientid,patient.patientfirstname,vital.visitdat,vital.temperature,vital.height,vital.weight,vital.respiratoryrate,vital.bodyposition,vital.bloodpressure,vital.heartstatus,vital.heart,vital.notes from patient,vital where vital.patientid=patient.patientid and vital.patientid='".$_POST["medicalnumber"]."' ";
$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
      echo" NO VITAL SIGNS RESULT FOUND ";
    // Affichage des produits
  else { ?>

     <TABLE  border="1" >
<?php

  echo "<th><b><center>MR</center></b></th><th><b>Name</b></th><th><b>Date</b></th><th><b>Temp<br>(C)</b></th><th><b>Height<br>(cm)</b></th><th><b>Weight<br>(kg)</b></th><th><b>Respiratory</b></th><th><b>Position</b></th><th><b>Blood Pressure</b></th><th><b>Heart Status</b></th><th><b>Heart<br>(BPM)</b></th><th><b>Notes</b></th>";
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td><center>" .
              $data[0] . "<td><center>" . $data[1]."<td><center>" . $data[2].  "<td><center>" . $data[3]. "<td><center>" . $data[4]. "<td><center>" . $data[5]. "<td><center>" . $data[6]. "<td><center>" . $data[7]. "<td><center>" . $data[8]. "<td><center>" . $data[9]. "<td><center>" . $data[10]. "<td><center>" . $data[11];
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
  <br />
  <legend><u>Vacctination History</u></legend><br />
  <?php
  $sql2 ="select patient.patientid,patientfirstname,immunizationdate,doctor.doctorname,immunizationname,immunization.doctornote from doctor,patient,immunization where doctor.doctorid=immunization.doctorid and  patient.patientid=immunization.patientid and immunization.patientid='".$_POST["medicalnumber"]."' order by immunization.immunizationid";

$res = mysql_query($sql2);
  if (mysql_num_rows($res)==0)
       echo "THIS PATIENT DON'T HAVE ANY VACCINATION";

  else { ?>

     <TABLE BORDER="1">

 <th><b>MR</b><th><b>Name</b><th><b>Date</b><th><b>Dr Name</b><th><b>Vaccination Name</b></th><th><b>Doctor Notes</b></th>
   <?php
   for ($n=0;$n<mysql_num_rows($res);$n++) {
       $lig = "<tr>";
       $data = mysql_fetch_row($res);
       $lig = "<tr><td>" .
               $data[0]. "<td>".$data[1]. "<td>".$data[2]. "<td>".$data[3]. "<td>".$data[4]. "<td>".$data[5];
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
         //echo"</table>";

  //?>
  
 <br /><br /><br /><?php
  
  
 $d1=date("20y-m-d",time());
  echo "<table><tr><td><b> Signature : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</b></td><td><b> Date :</b> " ."$d1"."</td></tr></table>";

  
?>
 </form>

