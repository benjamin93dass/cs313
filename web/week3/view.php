<?php
echo "reading 1";
if(isset($_POST['submit'])){
    echo "reading 2";
    foreach ($_POST['addedItems'] as $select){
        echo "reading 3";
        echo $select;
        $itemsInCart = array($select);
    }
}

$arrlength = count($itemsInCart);
var_dump($itemsInCart);
echo "<br>";
var_dump($arrlength);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Browse</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Items in cart:</h1><br> 
        
    </body>
</html>