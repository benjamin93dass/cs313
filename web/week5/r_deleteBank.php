<?php
    $bank_name = $_POST['nName'];
    $deb_bal = $_POST['nDebBal'];
    $aval_cre = $_POST['nAvalCre'];
    $cre_bal = $_POST['nCreBal'];

    require('dbconnect.php');
    $db = get_db();

    try {
        $update_query = 'INSERT INTO bank_account (bank_name, debit_balance, available_credit, credit_balance, name) VALUES (:bank_name, :debit_balance, :available_credit, :credit_balance, 1);';
        $stmt = $db->prepare($update_query);
        $stmt->bindValue(':bank_name', $bank_name);
        $stmt->bindValue(':debit_balance', $deb_bal);
        $stmt->bindValue(':available_credit', $aval_cre);
        $stmt->bindValue(':credit_balance', $cre_bal);
        $stmt->execute();
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: index.php");
    die();
?>