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

<?php 
        for($x = 0; $x < $arrlength; $x++){
            echo $itemsInCart[$x];
            echo "<br>";
            echo "test":
            echo "<br>"
        }
        ?>