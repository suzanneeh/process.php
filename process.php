<?php
$fieldA = $_POST["textnames"];
$keys = array('name','email', 'message'); 
$csv_line = array();
foreach($keys as $key){
    array_push($csv_line,'' . $_GET[$key]);
}
$fname = 'file_to_write_to.csv'; //NAME OF THE FILE
$csv_line = implode(',',$csv_line);
if(!file_exists($fname)){$csv_line = "\r\n" . $csv_line;}
$fcon = fopen($fname,'a');
$fcontent = $csv_line;
fwrite($fcon,$csv_line);
fclose($fcon);
?>