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

<?php
  include"bdd.php";
  ?>

<html>
<head>
<title>CMIS</title>
<SCRIPT LANGUAGE="JavaScript" src="calendrier/js/CalendarPopup.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/AnchorPosition.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/PopupWindow.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/date.js"></SCRIPT>
	 <SCRIPT LANGUAGE="JavaScript" src="calendrier/js/dhtmlgoodies_calendar.js"></SCRIPT>
	
	<SCRIPT LANGUAGE="JavaScript">
		var calendar = new CalendarPopup();
	</SCRIPT>
	
	
	<SCRIPT>
	/*
function datevalid(){
d=window.document.form1.startDate.value;

     var t = d.split("-");
     if (t.length!=3) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     for (j=0;j<t.length;j++) 
       if (isNaN(t[j])) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     var j = parseInt(t[2]);
     var m = parseInt(t[1]);
     var a = parseInt(t[0]);
   if ((j<=0) || (m<=0) || (a<=0)) {
        alert("Date invalide");
        v.value = "";
        exit;
       }
     if (a%4==0) bs=true; else bs=false;
     if ( ( (j>30) && 
            ((m==4) || (m==6) || (m==9) || (m==11) ) ) ||
          ( (j>31) && 
            ((m==1) || (m==3) || (m==5) || (m==7)  || (m==8)  || (m==10)  || (m==12) ) ) ||
          ( (bs) && (j>29) && (m==2) ) ||
          ( (bs==false) && (j>28) && (m==2)||(m>12) )     
            ) 
			 {
        alert("Date invalide");
        v.value = ""; }
		
}
*/
</SCRIPT>
 <script type="text/javascript">
window.onload=function(){
var elForm=document.getElementsByTagName('form')[0]; // Get the first form in the document
elForm.onsubmit=function()
{
var required=['patientfirstname2','patientadresse4','patientphone5','registernumber','patientbirthday9'];
// Place in this array the name of the form that you think should be mandatory
var bool=true; // Create bool variable and set its value to true
for(var i=0;i<required.length;i++)
{
if(document.getElementsByName(required[i])[0].value=='')
{
alert(required[i]+' CMIS-FIELD IS MANDATORY.');
bool=false;
}
}
return bool;
}
}
</script>

<style type="text/css">
<!--
A. { font-family: "Arial"; font-size: 11pt; text-decoration: underline}
.table {  font-family: "Arial"; font-size: 12pt; ; line-height: 12pt}
A:link {color:#000000;text-decoration: none}
A:visited{color:#000000;text-decoration: none} 
A:hover {color: #ff0000;text-decoration: underline}
.q1 {  background-color: #FFFF99; border: #000000; border-style: ridge; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px}
-->
</style>
</head>

<body text="#000000" leftmargin="0" topmargin="0">




 <form  action="patient1.php" id="patient" method="post" enctype="multipart/form-data" name="RTEDemo" onSubmit="submitForm();">
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
			  <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="findpatient1.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid1.php"><b>HOME</b></a></font></td> 
			    <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"> <a href="editpatient1.php"> <u> UPDATE </u></a></font></td> 
			   
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b> PATIENT REGISTRATION </b>
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
$d11="";
$d12="";



include"bdd.php";

if(isset($_POST["add"]))
{
 $d1=$_POST["patientid1"];
$d2=$_POST["patientfirstname2"];
$d3=$_POST["patientadresse4"];
$d4=$_POST["patientphone5"];
$d5=$_POST["registernumber"];
$d6=$_POST["patientsexe6"];
$d7=$_POST["patientnationality7"];
$d8=$_POST["patientstatus8"];
$d9=$_POST["patientbirthday9"];
$d10=$_POST["patientregistrationdate10"];


$query="SELECT MAX(patientid)+ 1 AS patientid FROM patient order by patientid";


$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){

echo "<script>alert(\" Registraion Done By Medical Number = ". $row['patientid'] ."\")</script>";

}

$sql="insert into clinic.patient (patientfirstname, patientadresse, patientphone,registernumber, patientsexe, patientnationality, patientstatus, patientbirthday, patientregistrationdate) VALUES ('".$d2."','" .$d3."','" .$d4."','" .$d5."','" .$d6."','" .$d7."','" .$d8."','" .$d9."','" .$d10."')";

mysql_query($sql);

if($sql==0){


}
else{
echo"<script>alert(\"ATTENTION REGISTRATION FAILED\")</script>";
}
    }
 ?>


	  
<br>
<fieldset>
<legend><b>PATIENT REGISTRATION</b></legend>


	<div class="imagebox">

<TABLE width="900" BORDER= 0   class="imagebox">
<tr>
<TD></TD>
<TD><INPUT TYPE="hidden" NAME="patientid1" SIZE=20 value="<?php echo $d1;?>" ></TD></tr><tr>
<TD><b>PATIENT NAME:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="patientfirstname2" SIZE=27 value="<?php echo $d2;?>"></TD>


<TD><b>ADDRESS:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="patientadresse4" SIZE=27 value="<?php echo $d3;?>"></TD></tr><tr>

<TD><b>PHONE NUMBER:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="patientphone5" SIZE=27 value="<?php echo $d4;?>"></TD>
<TD><b>REGISTER NUMBER:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="registernumber" SIZE=27 value="<?php echo $d5;?>"></TD></tr><tr>
<TD><b>SEX:</b></TD>
<TD><select  width="100%" NAME="patientsexe6"   value="<?php echo $d6;?>" class="listbox">

<option></option>
<option>MALE</option>
<option >FEMELE</option
></select>

<TD><b>NATIONALITY:*</b></TD>
<TD><select  width="100%" NAME="patientnationality7"   value="<?php echo $d7;?>" class="listbox">
<option></option>
<option>LEBANON</option>
<option>Albania</option>
<option>Algeria</option>
<option>Andorra</option>		
<option>Angola</option>		
<option>Antigua and Barbuda</option>		
<option>Argentina</option>		
<option>Armenia</option>		
<option>Australia</option>		
<option>Austria</option>		
<option>Azerbaijan</option>		
<option>Bahamas</option>		
<option>Bahrain</option>		
<option>Bangladesh</option>		
<option>Barbados</option>		
<option>Belarus</option>		
<option>Belgium</option>		
<option>Belize</option>		
<option>Benin</option>		
<option>Brazil</option>	
<option>Burundi</option>		
<option>Canada</option>		
<option>China</option>		
<option>Cote d'Ivoire</option>		
<option>Croatia</option>		
<option>Ecuador</option>		
<option>Egypt</option>		
<option>Finland</option>		
<option>France</option>		
<option>Germany</option>		
<option>Hungary</option>		
<option>India</option>		
<option>Indonesia</option>	
<option>Iran</option>		
<option>Iraq</option>		
<option>Ireland</option>	
<option>Italy</option>		
<option>Lesotho</option>	
<option>Liberia</option>	
<option>Libya</option>		
<option>Senegal</option>		
<option>South Africa</option>	
<option>Sudan</option>		
<option>Syria</option>		
<option>Tanzania</option>	
<option>Tunisia</option>	
<option>Turkey</option>		
<option>United Arab Emirates</option>		
<option>United Kingdom</option>		
<option>United States</option>		
<option>Uruguay</option>		
<option>Vietnam</option>		
<option>Yemen</option>		
		</select></tr><tr>


<TD><b>MARITAL STATUS:</b></TD>
<TD><select  NAME="patientstatus8"  value="<?php echo $d8;?>" class="listbox">
<option></option>
<option>SINGLE</option>
<option >DIVORCED</option>
<option>MARRIED</option>
<option >WIDOW</option>

</select>
 
<TD><b>BIRTH DATE:*</b></TD>
<TD><INPUT TYPE=TEXT NAME="patientbirthday9" SIZE=27 value="<?php echo $d9;?>"></TD>

</tr><tr>
<TD><b>REGISTRATION DATE:</b></TD>
<td>
				<div align="left" style="float:left">
                    <input name="patientregistrationdate10" size=15 type="text" class="input" value="<?php echo date("20y-m-d",time())?>" >
                </div>
				<div style="float:left">
				<A HREF="#" onClick="calendar.select(document.forms['patient'].patientregistrationdate10,'anchor1','yyyy-MM-dd');return false;" NAME="anchor1" ID="anchor1"><img src="images/insert_table.gif" border=0 ></A>
				</div>
</td>


<tr><td>
<input type="submit"  style="height:60"  style="width:80"  name="add" value="S A V E" > </td></tr></table>
      </fieldset>
               </form>
 </body>


</html>
