

<body>

<style type="text/css">
<!--
.imagebox{width:100%;
height:100%;
background-image:url("images\log2.jpg");
background-repeat:repeat;
background-position: 50% 50% ;
height:350;
}

INPUT {
background-color: white;
color: black;
font-family: cooper black;
font-size: 16 pt
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
			   <td height="22"><font face="cooper black, Helvetica, sans-serif" size="4"><a href="firstpage.php"><b>Back</b>
			    <td height="22"><font face="cooper black, Helvetica, sans-serif" size="3"><b>Employer Log In</b></font></td> 
                  </font></td>
           
			
			</form>
          </td>
        </tr>
        <tr align="center"> 
          <td colspan="2" height="7" bgcolor="red"></td>
        </tr>
		</table>
<div class="imagebox">

<form  method="post" name="form1">
 <br><br>

<table align="center" >

  <tr id='cat'>
  <tr><td colspan="4"><center><b>Employer Login</b></center></td></tr>
  <tr> <td  ><font face='verdana, arial, helvetica' size='2' align='center'> <b>Username : </b>
</font></td><br> <td align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='text' class='bginput' name='userid' ></font></td></tr>

<tr> <td  ><font face='verdana, arial, helvetica' size='2' align='center'> <b>Password :</b>
</font></td> <td align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password' ></font></td></tr>

<tr> <td colspan="3" align='center'><font face='verdana, arial, helvetica' size='2' align='center'>  
<input type='submit' name="ok" value='LOG IN'> 
</font></td> </tr>


<tr> <td colspan="3" align='center'><font face='verdana, arial, helvetica' size='2' align='center'>  
<a href="changepassemp.php">Forget Password</a>
</font></td> </tr>




<tr> <td  colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;  
</font></td> </tr>


</table></center>
<br><br><br>

<?php
include "session.php";
include"bdd.php";
 $seldb = mysql_select_db("clinic");
  if ($seldb==false) {
    echo "Database not exist";
    exit ;  }
if(isset($_POST["ok"])){
$u=$_POST["userid"];
$p=$_POST["password"];
$password=md5($p);
  $sql = "select * from employer where username='".$u."' and password='".$p."' and usertypeid='4';";
  $res = mysql_query($sql,$link);

if (mysql_num_rows($res)==0)
echo"<script>alert(\" ATTENTION:MAKE SHURE LOGIN ID AND PASSWORD ARE CORRECT\")</script>";
 else
       {

       $_SESSION["userid"] = $u;
       $_SESSION["password"] = $p;
        header("Location:datagrid1.php"); }
}

?>
</form> 
</body>

</html>
