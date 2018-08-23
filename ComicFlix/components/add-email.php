
<html>
<body>


<?php
$myfile = fopen("emails.txt", "w") or die("Unable to open file!");
$txt = $_POST["myemail"];
echo $txt;
fwrite($myfile, $txt);
fclose($myfile);
?> 
</body>
</html> 