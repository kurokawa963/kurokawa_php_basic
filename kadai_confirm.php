<?php

$str='';
$array=[];
$iamges=array();
$file=fopen('data/socks.csv','r');

if($file){
  while($line=fgets($file)){
$array[]=[
"date" => explode(" ", $line)[0],
"socks" => explode(" ", $line)[1],
"color" => explode(" ", $line)[2],
"namae" => explode(" ", $line)[3],
"email" => explode(" ", $line)[4],
"uploaded_path" => str_replace("\n","",explode(" ", $line)[5]),
];
}
}


flock($file,LOCK_UN);
fclose($file);

// var_dump($array);
// exit();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kadai.css">
    <title>Document</title>
</head>
<body>
    <h1>好きな靴下</h1>
    <p id="kutsushita">
  
 


</p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
    
    const Array = <?=json_encode($array)?>;
      console.log(Array);

      const socks_array=[];
      Array.forEach(function (document) {
socks_array.push(`<table>
<td>${document.date}</td>
<td>${document.namae}</td>
<td><font color="${document.color}">${document.socks}</font></td>
</table>
<div><img src="${document.uploaded_path}" width="20%"></div>`)
 
});

$('#kutsushita').html(socks_array);

</script>
</body>
</html>