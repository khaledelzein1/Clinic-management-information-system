<?php
  $link = mysql_connect("127.0.0.1", "root", "");
  if ($link==NULL) echo "Impossible de se connecter au serveur MySql ";
  $b=mysql_select_db("clinic");
?>
