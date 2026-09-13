
<form method="post" action="test.php"><table border="0"> <tr><td>username: </td><td><input type="text" name="username" /></td></tr> <tr><td>Password: </td><td><input type="password" name="password" /></td></tr> <tr><td>Confirm Password: </td><td><input type="password" name="confirm_password" /></td></tr> <tr><td></td><td><input type="submit" value="submit" /></td></tr> </table></form>

<?php

include"bdd.php";
/* This code will make a connection with database */
$con=mysql_connect("Hostname","username","password"); /* Now, we select the database */
mysql_select_db("Database Name"); /* Now we will store the values submitted by form in variable */
$username=$_POST['username'];$pass=$_POST['password'];/* we are now encrypting password while using md5() function */
$password=md5($pass);
$confirm_password=$_POST['confirm_password']; /* Now we will check if username is already in use or not */
$queryuser=mysql_query("SELECT * FROM login WHERE username='$username' ");
$checkuser=mysql_num_rows($queryuser);if($checkuser != 0){ echo "Sorry, ".$username." is already been taken."; }else { /* now we will check if password and confirm password matched */if($pass != $confirm_password){ echo "Password and confirm password fields were not matched"; }else { /* Now we will write a query to insert user details into database */$insert_user=mysql_query("INSERT INTO login (username, password) VALUES ('$username', '$password')"); if($insert_user){ echo "Registration Succesfull"; }else{ echo "error in registration".mysql_error(); } /* closing the if else statements */}}
 mysql_close($con);
?>
