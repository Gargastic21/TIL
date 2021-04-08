<?php

//$result = $_GET['name'];
//$myfile = fopen("$result", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("$result"));
//fclose($myfile);


if (isset($_POST['eid'])){

$result = $_POST['eid'];
$myfile = fopen("$result", "r") or die("Unable to open file!");
echo fread($myfile,filesize("$result"));
fclose($myfile);
exit();
}
?>

