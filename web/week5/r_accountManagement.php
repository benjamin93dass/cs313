<?php
    $deb_bal = $_POST['debBal'];
    $aval_cre = $_POST['avalCre'];
    $cre_bal = $_POST['creBal'];
    $bank_name = $_POST['nName'];


    if ($bank_name == "US Bank") {
        $id = 1;
    } else if ($bank_name == "BeeHive") {
        $id = 2;
    } else if ($bank_name == "BSN") {
        $id = 3;
    } else if ($bank_name == "Wells Fargo") {
        $id = 4;
    }else if ($bank_name == "TD Bank") {
        $id = 5;
    }else if ($bank_name == "New York - Mellon") {
        $id = 6;
    }else if ($bank_name == "Mountain America") {
        $id = 7;
    }else if ($bank_name == "Capitol One") {
        $id = 8;
    }else if ($bank_name == "Citi") {
        $id = 9;
    }else if ($bank_name == "State Street") {
        $id = 10;
    }else {
        $id = 0;
    }

    require('dbconnect.php');
    $db = get_db();

    try {
        // check for change in debit balance
        if ($deb_bal != 0) {
            $update_query = 'UPDATE bank_account SET debit_balance=:deb_bal WHERE bank_name=:bank_name AND name=1';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':deb_bal', $deb_bal);
            $stmt->bindValue(':bank_name', $bank_name);
            $stmt->execute();
        }
        // check for change in available credit
        if ($aval_cre != 0) {
            $update_query = 'UPDATE bank_account SET available_credit=:aval_cre WHERE bank_name=:bank_name AND name=1';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':aval_cre', $aval_cre);
            $stmt->bindValue(':bank_name', $bank_name);
            $stmt->execute();
        }
        // check for change in credit balance
        if ($cre_bal != 0) {
            $update_query = 'UPDATE bank_account SET credit_balance=:cre_bal WHERE bank_name=:bank_name AND name=1';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':cre_bal', $cre_bal);
            $stmt->bindValue(':bank_name', $bank_name);
            $stmt->execute();
        }
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: index.php");
    die();
?>