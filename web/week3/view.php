<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Browse</title>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
        
        <script>
            function deleteItems() {
                $('input[type=checkbox]').each(function () {
                    if (this.checked) {
                    itemName = $(this).val();
                    price = "";
                    this.nextSibling.textContent = "";
                    $(this).remove();
                    $.ajax({
                        url: 'session.php',
                        type: 'POST',
                        // async: false,
                        data: {
                            itemName: itemName,
                            price : price
                        }
                    }).done(function(data){
                        // alert(data);
                    });
                    <?php unset($_SESSION[itemName]); ?>
                    }
                });
            }
        </script>   

    </head>
    <body>      
        <?php
            echo "<h1>Would you like to remove any of the following items before proceeding?</h1><br> ";
            function showcart() {
                echo "<div id='viewcartitems'> ";
                foreach($_SESSION as $key => $value){
                    $originalkey = $key;
                    if ($key == "chair") {
                        $key = "chair";
                    } elseif ($key == "laptop") {
                        $key = "laptop";
                    } elseif ($key == "table") {
                        $key = "table";
                    } elseif ($key == "watch") {
                        $key = "watch";
                    }
                    echo "<div><input type='checkbox' name='cartitem' value='$originalkey'> $key for $$value.00</div>";
                    }
                echo "</div>";
            }
            showcart();
            ?>
        <button id="deleteSelected" type="button" onClick="deleteItems()"> Delete Items </button>

        <h1>Would you like to go back to browsing?</h1>
        <button onclick="window.location.href = 'browse.php';">Yes!</button>
        <button onclick="window.location.href = 'checkout.php';">Continue to checkout</button>
    </body>
</html>