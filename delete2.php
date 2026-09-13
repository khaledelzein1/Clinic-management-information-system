
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['investigationid']) && is_numeric($_GET['investigationid'])) { 
   // get id value
    $investigationid = $_GET['investigationid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM investigation WHERE investigationid=$investigationid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editvisit.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editvisit.php"); } ?>