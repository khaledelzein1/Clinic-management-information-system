


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
</style>
<style type="text/css">
<!--
INPUT {
background-color: white;
color:black;
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
TEXTAREA {
background-color:white;
border: black 0px solid;
color: #000000;
font-family: arial, verdana, ms sans serif;
font-size: 12pt;
font-weight: normal
} 
.imagebox{width:100%;
height:350;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}




.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 

-->
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
		  <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7">
			 <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="datagrid2.php"><b>BACK</b></a></font></td> 
			     <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="firstpage.php"><b>HOME</b></a></font></td>
				   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>CHANGE PASSWORD</b>
                  </font></td>
				  
                
				 
             
			</form>
          </td>
        </tr>
        <tr align="center"> 
          </font></td>
				  
                 <tr > 
          <td colspan="10" height="7" width="100%" bgcolor="red"></td>
        </tr>
				 
              
            

   
</table>
  <div class="imagebox">

 
 <form  action="changepass.php" id="update" method="post" >
<?php
error_reporting(0);
$a="";
$b="";
include "bdd.php";
include"session.php";

$a=$_POST["username"];
$b=$_POST["password"];
if (isset($_POST["save"]))
    {
	
 $sql = "update doctor set doctor.password = '".$_POST["password"]."'   where  doctor.username='".$_POST["username"]."'";
 
     $res = mysql_query($sql);
if($sql==0){

echo"<script>alert(\" UPDATE SUCCESS\")</script>";
}
else{
echo"<script>alert(\"ATTENTION UPDATE FAILED\")</script>";
}
	
	 } ?>
    
<br><center><TABLE  align="center"  BORDER=1 width="400" bgcolor="#99ccff";>
<tr><TD><INPUT TYPE="hidden"  NAME="id"  ></TD></tr><tr>
<TD><b>USERNAME</b></TD>
<TD><INPUT TYPE="text"  NAME="username"  ></TD></tr><tr>
<TD><b>NEW PASSWORD</b></TD>
<TD><INPUT TYPE="text"  NAME="password"  ></TD></tr>
</td><tr><td colspan="5" align="center"><input type="submit" align="center" style="height:50" style="width:100" border="3" size="30" value="--S A V E--" name="save" > </td>
</tr>

</table>

</center>
</form>
</html>
</body>



 

  
  
   

 







  
  
  






