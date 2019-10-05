<?php
$name = $_POST['person'];
$email = $_POST['email'];
$major = $_POST['major'];
$textarea = $_POST['textarea'];


$continents = $_POST['cont'];

function rename($v){
    if ($v==="NA"){
        return "North America";
    } else if ($v==="SA"){
        return "South America";
    } else if ($v==="AF"){
        return "Africa";
    } else if ($v==="AN"){
        return "Antartica";
    } else if ($v==="AS"){
        return "Asia";
    } else if ($v==="EU"){
        return "Europe";
    } else if ($v==="AU"){
        return "Australia";
    }
    
    return $v;
};

//print_r(array_map("rename", $continents));

?>

<!DOCTYPE html>
<html>
<body>
    <?php
    echo "<p>Your name: $name</p><br>";
    echo "<p>Your email add: <a href='mailto:$email'>$email</a></p><br>";
    echo "<p>Your major: $major</p><br>";
    echo "<p>Your blah: $textarea</p><br><br>";
    foreach($continents as $continent) {
        echo rename($continent) . "<br>";
    };
    ?>
</body>
</html>