<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Confirmation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
   crossorigin="anonymous">
  <link href="styles.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>

<?php
function showconfirmation() {
    echo "<div id='confirmation'>";
    echo "<h3> Congratulations! You have bought the following items... </h3>";
    
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

        if ($value == "") {
        } else {
            echo "<span> $key for $$value.00</span><br>";
        }
        // unset($_SESSION['Products']);
    }
echo "<hr>";
echo "<h3> We will ship these items to the following address: </h3>";
$street  =  $_POST["street"];
$state   =  $_POST["state"];
$country =  $_POST["country"];
$zip     =  $_POST["zip"];
echo "<div>";
    echo "<span>" . htmlspecialchars($street).", ". htmlspecialchars($state) . ", ". htmlspecialchars($country).", ". htmlspecialchars($zip) ."</span> <br>";
echo "</div>";
echo "</div>";
}
showconfirmation();
?>


</body>
</html>