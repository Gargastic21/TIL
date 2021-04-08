<?php
//header("Location: ../php/file-path.php");
//$result = print_r($_GET['name']);
//$result = $_POST['name'];
// $testa = escapeshellarg($result);
//$output = shell_exec("/var/www/html/amisha_bck/scripts/filepath.sh $testa");
#echo $output;
//$fh = fopen("/var/www/html/amisha_bck/dependency/filepath_bck.txt", 'r');
//$pageText = fread($fh, 25000);
//$wrap = nl2br($pageText);
//header("Location: ../");
//echo $wrap;

if (isset($_POST['eid'])){
//    echo  $_POST['eid'];

$result = $_POST['eid'];
 $testa = escapeshellarg($result);
$output = shell_exec("/var/www/html/demo/scripts/filepath.sh $testa");
#echo $output;
$fh = fopen("/var/www/html/demo/dependency/filepath_bck.txt", 'r');
$pageText = fread($fh, 25000);
$wrap = nl2br($pageText);
echo $wrap;
exit();
}

?>

