
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['laboratoryid']) && is_numeric($_GET['laboratoryid'])) { 
   // get id value
    $laboratoryid = $_GET['laboratoryid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM laboratory WHERE laboratoryid=$laboratoryid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editlab.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editlab.php"); } ?>