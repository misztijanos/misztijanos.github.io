<?php
$number= file_get_contents("like-file.php");
$likeFile = fopen("like-file.php", "w") or die("Unable to open file!");
$number = 1 + $number;
fwrite($likeFile, $number);
fclose($likeFile);
?>