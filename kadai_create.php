<?php

// var_dump($_POST);
// exit();

$date=$_POST['date'];
$socks=$_POST['socks'];
$color=$_POST['color'];
$namae=$_POST['namae'];
$email=$_POST['email'];
$filename = $_FILES['upimg']['name'];



$uploaded_path = 'image/'.$filename;
$result = move_uploaded_file($_FILES['upimg']['tmp_name'],$uploaded_path);

$write_data="{$date} {$socks} {$color} {$namae} {$email} {$uploaded_path}\n";


$file=fopen('data/socks.csv','a');

flock($file,LOCK_EX);
// flockでfileをロック

fwrite($file,$write_data);
flock($file,LOCK_UN);
fclose($file);

header('Location:kadai_confirm.php')



?>