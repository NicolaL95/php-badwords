<?php
$par = "Hello World";
$parLen = strlen($par);
echo $par,' lunghezza: ',$parLen .' \ ';
$toSub = $_GET["str"];
$par_e = str_replace($toSub, "***", $par);
$parLen_e = strlen($par_e);
echo $par_e,' lunghezza: ',$parLen_e,' lunghezza originale: ',$parLen;
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
    
</body>
</html>