<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Checkout</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="style-1.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    </head>
    <body id="viewcart">
        <form action="confirm.php" method="POST"> 
            <h1>Please fill in the following information so we can bill you appropriately.</h1>
            <p>Please enter your address:  <input type='text' name='street' value=''></p><br>
            <p>State: <input type='text' name='state' value=''></p><br> 
            <p>Country<input type='text' name='country' value=''></p><br>
            <p>Zip code<input type='text' name='zip' value=''></p><br> 
            <button id="checkout" type="submit" > Checkout </button>
        </form> 
    </body>
</html>