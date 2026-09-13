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
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>        <title>View Records</title></head>
<body>
<?php /*         VIEW.PHP        Displays all data from 'players' table*/        // connect to the database     
 include"bdd.php";       
  // get results from database   
       $result = mysql_query("SELECT * FROM clinic.doctor")                 or die(mysql_error());       
	                      // display data in table       
						   echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";      
						             echo "<table border='1' cellpadding='10'>";       
									  echo "<tr> <th>DOCTOR ID</th> <th>DOCTOR Name</th> <th>SPECIALITY NAME</th><th>EDIT </th><th>DELETE</th> </tr>";     
						      // loop through results of database query, displaying them in the table    
							      while($row = mysql_fetch_array( $result )) {                         
								         // echo out the contents of each row into a table       
										          echo "<tr>";      
												            echo '<td>' . $row['doctorid'] . '</td>';       
															         echo '<td>' . $row['doctorname'] . '</td>';       
																	          echo '<td>' . $row['doctorspeciality'] . '</td>';       
																			           echo '<td><a href="edit.php?doctorid=' . $row['doctorid'] . '">Edit</a></td>';          
																					         echo '<td><a href="delete.php?doctorid=' . $row['doctorid'] . '">Delete</a></td>';                                                                                      echo "</tr>";         }       
												    // close table>       
													 echo "</table>";?><p><a href="new.php">Add a new record</a></p></body></html> 