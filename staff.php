

<?php
  include"bdd.php";
  include"session.php";?>
  


  

<html>
<head>
<title>CMIS</title>

	
	
	

<style type="text/css">
<!--
.imagebox{width:100%;
height:300;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}
INPUT {
background-color: white;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}
.listbox{ 
background-color: #99ccff;
color: black;
font-family: arial, verdana, ms sans serif;
font-weight: bold;
font-size: 12pt
}

.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 

-->
</style>
<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.staff.staffemail
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>
 
<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  <br>
        <tr> 
		<img border="0" src="images/jk.png" width="1300" height="140">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		  
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="34">
              <tr align="center" bgcolor="#98AFC7">
			  <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid.php"><b>BACK</b></a></font></td> 
			   <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="firstpage.php"><b>HOME</b></a></font></td> 
			   
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> EMPLOYER REGISTRATION </b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
	
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="4" height="7" bgcolor="red"></td>
        </tr>
        <tr >
          <td colspan="4" height="20">
</head>

<body text="#000000" leftmargin="0" topmargin="0">




 <form  action="staff.php" id="staff" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="return ValidateForm()">


				
                 



<?php



$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";
$d7="";
$d8="";
$d9="";
$d10="";




include"bdd.php";

if(isset($_POST["add"]))
{
 $d1=$_POST["idstaff"];
$d2=$_POST["staffname"];
$d3=$_POST["staffemail"];
$d4=$_POST["staffadress"];
$d5=$_POST["staffphone"];
$d6=$_POST["staffregdate"];
$d7=$_POST["staffusername"];
$d8=$_POST["staffpassword"];
$d9=$_POST["confirm"];
$d10=$_POST["confirmpassword"];

//$r="select * from sagesse.employer where idemployer=".$d1;
//$res = mysql_query($r);
//if(mysql_num_rows($res)>0)
//echo"<h1>ce numero est deja utilisee</h1>";
//else
//{
//$sql="INSERT INTO clinic.patient ( patientfirstname, patientadresse, patientphone, patientsexe, patientnationality, patientstatus, patientbirthday, patientregistrationdate, //reservationid) VALUES('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."','" .$d9."')";
$query=mysql_query("select employer.username from employer where employer.username='".$d7."'");
if (mysql_num_rows($query)>0)
{
echo"<script>alert(\" User Name Already Exists Please Re-Enter New Username\")</script>";
}
else
{

$sql="insert into clinic.employer (employername, email, adress,phone,  registerdate, username, password,confirmpassword,usertypeid) VALUES ('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."','" .$d10."','" .$d9."')";
mysql_query($sql);

if ($d8==$d10){
echo"<script>alert(\" REGISTRATION DONE\")</script>";
}
else{
echo"<script>alert(\"ERROR CONFIRM PASSWORD\")</script>";
}}}
 ?>



	  
<fieldset>
<legend><b>EMPLOYER REGISTRATION</b></legend>


	<div class="imagebox">

<TABLE width="900" BORDER= 0   class="imagebox">
 

<tr>
<TD></TD>
<TD><INPUT TYPE="hidden" NAME="idstaff" SIZE=20 value="<?php echo $d1;?>" ></TD></tr><tr>
<TD><b>EMPLOYER NAME:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="staffname" SIZE=27 value="<?php echo $d2;?>"></TD>


<TD><b>E_MAIL:</b></TD>
<TD><INPUT TYPE=TEXT NAME="staffemail" SIZE=27 value="<?php echo $d3;?>"></TD></tr><tr>

<TD><b>ADRESS:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="staffadress" SIZE=27 value="<?php echo $d4;?>"></TD>

<td><b>PHONE:</b></TD>
<TD><INPUT TYPE=TEXT NAME="staffphone" SIZE=27 value="<?php echo $d5;?>"></TD>

</tr><tr>
<td>
				
                    <input name="staffregdate" size=15 type="hidden" class="input" value="<?php echo date("20y-m-d",time())?>" >
              
</td>
</tr>
<tr>
<TD><b> USERNAME:</b></TD>
<TD><INPUT TYPE=TEXT NAME="staffusername" SIZE=27 value="<?php echo $d7;?>"></TD>
<TD><b>PASSWORD:</b></TD>
<TD><INPUT TYPE=password NAME="staffpassword" SIZE=27 value="<?php echo $d8;?>"></TD>
</tr>
<tr>
<TD colspan="2"><b> IS ADMIN:</b><INPUT TYPE="radio" NAME="confirm" SIZE=27 value="1" checked="checked">
&nbsp&nbsp&nbsp <b>IS NURSE:</b>
<INPUT TYPE="radio" NAME="confirm" SIZE=27 value="3">&nbsp&nbsp&nbsp <b>IS EMPLOYER:</b>
<INPUT TYPE="radio" NAME="confirm" SIZE=27 value="4"></td>
<TD ><b> CONFIRM PASSWORD:</b></TD>
<TD  ><INPUT TYPE=password NAME="confirmpassword" SIZE=27 value="<?php echo $d10;?>"></TD>
</tr>
<tr><td>

<input type="submit"  style="height:60"  style="width:80"  name="add" value="S A V E" > </td></tr></table>
      </fieldset>
               </form>
 </body>


</html>
