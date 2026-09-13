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
<head>
<title>CMIS</title>

<style type="text/css">
<!--
A. { font-family: "Arial"; font-size: 11pt; text-decoration: underline}
.table {  font-family: "Arial"; font-size: 12pt; ; line-height: 12pt}
A:link {color:#000000;text-decoration: none}
A:visited{color:#000000;text-decoration: none} 
A:hover {color: #ff0000;text-decoration: underline}
.q1 {  background-color: #FFFF99; border: #000000; border-style: ridge; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px}
-->
INPUT {
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}

</style>
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> <br>
		<img border="0" src="images/jk.png" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="datagrid1.php" method="POST">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="40">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="editpatient1.php"><b>BACK</b></a></font></td> 
			  
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>UPDATE INFORMATIONS</b>
                  </font></td>
				  
                
				 
    
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="red"></td>
        </tr>
        <tr >
          <td colspan="4" height="20"> <div class="imagebox"><br>
 <?php 

 /*  EDIT.PHP Allows user to edit specific entry in database*/
  // creates the edit record form 
  // since this form is used multiple times in this file, I have made it a function that is easily reusable 
 function renderForm($patientid, $patientfirstname,$patientadresse,$patientphone,$registernumber,$patientsexe,$patientnationality,$patientstatus,$patientbirthday,$patientregistrationdate, $error) { ?> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> <html> <head> <title>Edit Record</title> </head> <body> <?php 
  // if there are any errors, display them 
  if ($error != '') { echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>'; } ?>  
   <form action="" method="post"> 
   <table background="images/log2.jpg" ><tr><td colspan="2">
   <input type="hidden" name="patientid" value="<?php echo $patientid; ?>"/>
    <div> <p><strong> MEDICAL NUMBER:</strong> <?php echo $patientid; ?></p></div></td></tr><tr><td>
	</p> <strong>PATIENT NAME: </strong></td><td>
	 <input type="text" name="patientfirstname" value="<?php echo $patientfirstname; ?>"/></td><td>
	  <strong>ADRESSE: </strong></td><td>
	  <input type="text" name="patientadresse" value="<?php echo $patientadresse; ?>"/></td></tr><tr><td>
	  <strong> PHONE:</strong></td><td>
	 <input type="text" name="patientphone" value="<?php echo $patientphone; ?>"/></td><td>
	 <strong>REGISTER NUMBER:</strong></td><td>
	 <input type="text" name="registernumber" value="<?php echo $registernumber; ?>"/></td></tr><tr><td>
	 <strong>SEXE:</strong></td><td>
	 <input type="text" name="patientsexe" value="<?php echo $patientsexe; ?>"/></td><td>
	 <strong>NATIONALITY:</strong></td><td>
	 <input type="text" name="patientnationality" value="<?php echo $patientnationality; ?>"/></td></tr><tr><td>
	 <strong>MARITAL STATUS:</strong></td><td>
	 <input type="text" name="patientstatus" value="<?php echo $patientstatus; ?>"/></td><td>
	 <strong>BIRTH DATE:</strong></td><td>
	 <input type="text" name="patientbirthday" value="<?php echo $patientbirthday; ?>"/></td></tr><tr><td>
	 <strong>REGISTRATION DATE:</strong></td><td>
	 <input type="text" name="patientregistrationdate" value="<?php echo $patientregistrationdate; ?>"/></td></tr><tr>
	 
	  <input type="submit" name="submit" value="EDIT"  size="60" align="texttop"> </div> </form></table> </td></tr> </body> </html> 
	   <?php }
	  // connect to the database
	  include"bdd.php";
	    // check if the form has been submitted. If it has, process the form and save it to the database
		 if (isset($_POST['submit'])) { 
		  // confirm that the 'id' value is a valid integer before getting the form data 
		  if (is_numeric($_POST['patientid'])) { 
		  // get form data, making sure it is valid
		   $patientid = $_POST['patientid']; 
		   $patientfirstname = mysql_real_escape_string(htmlspecialchars($_POST['patientfirstname']));
		    $patientadresse = mysql_real_escape_string(htmlspecialchars($_POST['patientadresse'])); 
		   $patientphone = mysql_real_escape_string(htmlspecialchars($_POST['patientphone'])); 
		   $registernumber = mysql_real_escape_string(htmlspecialchars($_POST['registernumber'])); 
		      $patientsexe = mysql_real_escape_string(htmlspecialchars($_POST['patientsexe'])); 
			   $patientnationality = mysql_real_escape_string(htmlspecialchars($_POST['patientnationality'])); 
			    $patientstatus = mysql_real_escape_string(htmlspecialchars($_POST['patientstatus'])); 
				 $patientbirthday = mysql_real_escape_string(htmlspecialchars($_POST['patientbirthday'])); 
		   $patientregistrationdate = mysql_real_escape_string(htmlspecialchars($_POST['patientregistrationdate'])); 
		    // check that firstname/lastname fields are both filled in 
			if ($patientid == '' || $patientfirstname == '' || $patientadresse == ''|| $patientphone == ''|| $registernumber == ''|| $patientsexe == ''|| $patientnationality == ''|| $patientstatus == ''|| $patientbirthday == ''|| $patientregistrationdate == '') {
			 // generate error message 
			 $error = 'ERROR: Please fill in all required fields!'; 
			  //error, display form
			   renderForm($patientid, $patientfirstname,$patientadresse,$patientphone,$registernumber,$patientsexe,$patientnationality,$patientstatus,$patientbirthday,$patientregistrationdate, $error); } else {
			    // save the data to the database
				 mysql_query("UPDATE clinic.patient SET patientfirstname='$patientfirstname', patientadresse='$patientadresse',patientphone='$patientphone',registernumber='$registernumber',patientsexe='$patientsexe',patientnationality='$patientnationality',patientstatus='$patientstatus',patientnationality='$patientnationality',patientstatus='$patientstatus',patientbirthday='$patientbirthday',patientregistrationdate='$patientregistrationdate' WHERE patient.patientid='$patientid'") or die(mysql_error()); 
				   // once saved, redirect back to the view page 
				   header("Location: edit88.php");  } } else { 
				   // if the 'id' isn't valid, display an error 
				   echo 'ERROR!'; } } else 
				   // if the form hasn't been submitted, get the data from the db and display the form 
				   {  
				   // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0) 
				   if (isset($_GET['patientid']) && is_numeric($_GET['patientid']) && $_GET['patientid'] > 0) { 
				   // query db 
				   $patientid = $_GET['patientid'];
				    $result = mysql_query("SELECT * FROM clinic.patient WHERE patient.patientid=$patientid") or die(mysql_error());  $row = mysql_fetch_array($result); 
					 // check that the 'id' matches up with a row in the databse 
					 if($row) {  
					 // get data from db 
					 $patientid = $row['patientid']; 
		   $patientfirstname = $row['patientfirstname']; 
		    $patientadresse = $row['patientadresse']; 
		   $patientphone = $row['patientphone']; 
		   $registernumber = $row['registernumber'];  
		      $patientsexe = $row['patientsexe']; 
			   $patientnationality= $row['patientnationality']; 
			    $patientstatus = $row['patientstatus']; 
				 $patientbirthday = $row['patientbirthday'];  
		   $patientregistrationdate = $row['patientregistrationdate']; 
					 
					 
					 
					   
					 // show form 
					 renderForm($patientid, $patientfirstname,$patientadresse,$patientphone,$registernumber,$patientsexe,$patientnationality,$patientstatus,$patientbirthday,$patientregistrationdate, ''); } else 
					 // if no match, display result 
					 { echo "No results!"; } } else 
					 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error 
					 { echo 'DONE'; } }?>