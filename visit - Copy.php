<?php
  include"session.php";
  include"bdd.php";


$u=$_SESSION["user"];
$p=$_SESSION["pwd"];
  $sql = "select *from security where username='".$u."' and password='".$p."';";
  $res = mysql_query($sql,$link);
  if ($_SESSION["user"]==false)
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
</head>

<body text="#000000" leftmargin="0" topmargin="0">

<table width="1300" border="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td align="center">
      <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
	  
        <tr> 
		<img border="0" src="images/jk.png" width="1300" height="100">
          
        </tr>
        <tr align="right"> 
          <td colspan="2" height="9"> 
		   <form action="datagrid.php" method="POST">
            <table align="center" width="70%" border="0" cellpadding="0" cellspacing="3" height="20">
              <tr align="center" bgcolor="#00CCFF">
			  <td height="22"><font face="Arial, Helvetica, sans-serif" size="2"><a href="datagrid.php"><b>BACK</b></a></font></td> 
			   <td height="22"><font face="Arial, Helvetica, sans-serif" size="2"><a href="datagrid.php"><b>HOME</b></a></font></td> 
			   
				   <td height="22"><font face="Arial, Helvetica, sans-serif" size="2"><b>MEDICAL VISITS</b>
                  </font></td>
				  
                
				 
              </tr>
            </table>
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="10" bgcolor="#3366CC"></td>
        </tr>
        <tr valign="top"> 
          <td colspan="2" height="18"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top" height="400" width="150"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" background="images/k3.jpg" height="400">
                    <tr> 
                      <td height="19">&nbsp;</td>
                      <td height="19" bgcolor="#0099FF" width="100%" align="center"><font size="3" face="Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">MEDICAL VISITS 
                         </font></b></font></td>
                    </tr>
                    <tr valign="top"> 
                      <td colspan="2" height="108"> 
                        <table width="100%" border="0" align="right" cellpadding="0" cellspacing="2">
						 <tr> 
						  <td align="center" height="18" bgcolor="#77C9FF"><font size="2" face="Arial, Helvetica, sans-serif"><a href="vital.php">
                             <b> VITAL SIGNS</b></a></font></td>
                          </tr>
						  <tr> </tr>
						   <tr></tr>
						    <tr></tr>
							 <tr></tr></tr><tr></tr><tr></tr><tr>
							 <td align="center" height="18" bgcolor="#77C9FF"><font size="2" face="Arial, Helvetica, sans-serif"><a href="medical1.php">
                             <b>  MEDICAL VISITS</b></a></font></td>
							  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr> <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							 <td align="center" height="18" bgcolor="#77C9FF"><font size="2" face="Arial, Helvetica, sans-serif"><a href="vital1.php">
                             <b> VITAL SIGNS REPORTS</b></a></font></td>
							  <tr></tr><tr></tr><tr></tr><tr>
							  <td align="center" height="18" bgcolor="#77C9FF"><font size="2" face="Arial, Helvetica, sans-serif"><a href="vital2.php">
                             <b> VITAL SIGNS TRANSACTIONS</b></a></font></td></tr><tr><tr></tr><tr></tr><tr></tr><tr><tr>
							  
							   <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							  
                          <tr> 
						   &nbsp
                            <td align="center" height="18" bgcolor="#77C9FF"><font size="2" face="Arial, Helvetica, sans-serif"><a href="viewvisit.php"> 
                              <b>VIEW ALL VISITS FROM PATIENT</b></a></font></td>
                          </tr>
						  <tr> </tr>
						   <tr></tr>
						    <tr></tr>
							 <tr></tr>
							  <tr></tr><tr></tr>
                          <tr> 
						   &nbsp
                            <td align="center" height="18" bgcolor="#77C9FF"><font size="2" face="Arial, Helvetica, sans-serif"><a href="viewvisit1.php"> 
                              <b>CONSULT VISIT BY ORDER NUMBER</b></a></font></td>
                          </tr>
                          
                        </table>
                      
                </td>
                <td width="550" valign="top">
                  <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td colspan="2"><font size="2" face="Arial, Helvetica, sans-serif"></font>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p></p>
                      </td>
                    </tr>
                    <tr> 
                      <td height="9" width="100" bgcolor="#3366CC" align="center"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#FFFFFF"></font></b></td>
                      <td height="9" width="350">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td height="1" colspan="2" bgcolor="#3366CC"></td>
                    </tr>
                    <tr> 
                      <td colspan="2" height="200">&nbsp;</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2"><!-- You may replace the following with your own information. -->

</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
