
 <?php

  include"bdd.php";
   // check if the 'id' variable is set in URL, and check that it is valid 
   if (isset($_GET['doctorid']) && is_numeric($_GET['doctorid'])) { 
   // get id value
    $doctorid = $_GET['doctorid'];  
	// delete the entry
	 $result = mysql_query("DELETE FROM doctor WHERE doctorid=$doctorid")  or die(mysql_error());   
	 // redirect back to the view page
	  header("Location: view.php"); } else 
	  // if id isn't set, or isn't valid, redirect back to view page 
	  { header("Location: view.php"); } ?>