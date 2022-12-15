<?php
$random_number=rand(0,4);

if($random_number===0){
    $result='大吉';
}
if($random_number===1){
    $result='小吉';
}if($random_number===2){
    $result='中吉';
}if($random_number===3){
    $result='凶';
}
if($random_number===4){
    $result='大凶';
}
echo $result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>今日の運勢は<?=$result?>です！</h1>

</body>
</html>