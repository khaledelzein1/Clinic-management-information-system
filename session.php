<html>
<head>
<body>
<?php
 session_save_path("tmp");
  if (session_start()==false) echo "PbDemarrage de session";
?>
</body>
</head>
</html>
