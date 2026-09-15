<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

function esPar(){
    return $numero % 2 === 0;
}
    $num = 42;
    
    if(esPar($num)) {
        echo "El numero ingresado es ".$num ." es par";
    }else{
        echo "El numero ingresado es ".$num ." no es par";
    }
?>
    
</body>
</html>