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
</style>
<!-- this script got from www.javascriptfreecode.com-Coded by: Krishna Eydatoula -->
<style type="text/css">
<!--


INPUT {
background-color:white ;
color: black;
font-family: cooper black;
font-size: 16 pt
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


.altTextField {
background-color: #ADD8E6;
font-family: verdana;
font-size: 12pt;
color: #09c09c
} 
.imagebox{width:100%;
height:400;
background-image:url("images\log2.jpg");
background-repeat:no-repeat;
background-position: 50% 50% ;
}
-->
</style>




</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  <br>
        <tr>
	<td><center><img border="0" align="top" src="images/jk.png" width="100%" height="140"></center></td>
		
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="datagrid.php" method="POST">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#98AFC7"> 
			   <td height="22" width="150"><font face="cooper black, Helvetica, sans-serif" size="3"><a href="login.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="4"><b>H O M E</b>
                  </font></td>
           
			
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="7" bgcolor="red"></td>
        </tr>
		</table>
		<div class="imagebox">
			<br><br><br>
			 <table align="center" border="0" width="84%"  background="images\log2.jpg">
              <tr > 
			   <td align="center">
			   <form action="staff.php" method="post""> 
               <input type="submit" value="ADD NEW USER" style="height:60" style="width:100%"/> 
               </form>
			   </td>
			   
			    <td align="center">
			   <form action="newclinic.php" method="post""> 
               <input type="submit" value="ADD NEW CLINIC" style="height:60" style="width:100%"/> 
               </form>
			   </td>
			   </tr><tr>
			      <td align="center">
			   <form action="newdoctor.php" method="post""> 
               <input type="submit" value="ADD NEW DOCTOR" style="height:60" style="width:100%"/> 
               </form>
			   </td>
			   
				 
			
                

				  <td align="center" >
			   <form action="visit1.php" method="post""> 
               <input type="submit" value="REPORTS & STATISTICS" style="height:60" style="width:100%"/> 
               </form>
			   </td> </tr>
            </table>
                  
    

</body>
</html>
