<?php

if(isset($_POST['submit'])){
    $itemsInCart = htmlspecialchars($_POST['addedItems']);
}

$arrlength = count($itemsInCart);

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
        <?php 
        for($x = 0; $x < $arrlength; $x++){
            echo $itemsInCart[$x];
            echo "<br>";
        }
        ?>
        
    </body>
</html>