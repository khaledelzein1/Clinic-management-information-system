
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['medicationid']) && is_numeric($_GET['medicationid'])) { 
   // get id value
    $medicationid = $_GET['medicationid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM medication WHERE medicationid=$medicationid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: editmed.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: editmed.php"); } ?>