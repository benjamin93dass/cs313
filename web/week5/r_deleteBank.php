<?php
    $bank_name = $_POST['dName'];

    require('dbconnect.php');
    $db = get_db();

    try {
        $update_query = 'DELETE FROM bank_account WHERE bank_name = ':dName';';
        $stmt = $db->prepare($update_query);
        $stmt->bindValue(':dName', $bank_name);
        $stmt->execute();
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: index.php");
    die();
?>