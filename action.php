<?php

$name=$POST['first_name'];
$name=$POST['last_name'];

var_dump($first_name,$last_name);

 $FileName=$_FILES['myfile']['name'];
 $TmpName=$_FILES['myfile']['tmp_name'];
 
 move_uploaded_file($TmpName,$FileName);
 
 echo("File Uploaded Successfuly");
?> 