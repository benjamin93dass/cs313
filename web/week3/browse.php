<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Browse</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="style-1.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        
        <script>
            function addToCart(itemName, price) {
                $("#" + itemName).text("Added to Cart!");
                $("#" + itemName).css("background-color", "green");
                $.ajax({
                    url: 'session.php',
                    type: 'POST',
                    data: {
                        itemName: itemName,
                        price: price,
                    }
                }).done(function(data){});
            }
        </script>
    </head>
    <body>
        <form method="post" action="view.php">
            <p>Please select from the following:</p><br><br><br>
            <label class="ckb">
                <input type="checkbox" name="addedItems[]" value="chair" onclick="addToCart('chair', '20')">
                <i></i> <img src="images/chair.jpg" alt="chair" style="width:250px;height:250px;">
            </label>
            <label class="ckb">
                <input type="checkbox" name="addedItems[]" value="laptop"onclick="addToCart('laptop', '500')">
                <i></i> <img src="images/laptop.jpg" alt="laptop" style="width:300px;height:250px;">
            </label>
            <label class="ckb">
                <input type="checkbox" name="addedItems[]" value="table" onclick="addToCart('table', '50')">
                <i></i> <img src="images/table.jpg" alt="table" style="width:300px;height:250px;">
            </label>
            <label class="ckb">
                <input type="checkbox" name="addedItems[]" value="watch" onclick="addToCart('watch', '70')">
                <i></i> <img src="images/watch.jpg" alt="watch" style="width:200px;height:250px;">
            </label>
            <br><br><br><br><br>
            <input type="submit" name="submit" value="View cart">
        </form>
    </body>
</html>