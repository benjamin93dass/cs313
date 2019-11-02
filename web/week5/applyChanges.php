<?php
    $deb_bal = $_POST['debBal'];
    $aval_cre = $_POST['avalCre'];
    $cre_bal = $_POST['creBal'];
    $bank_name = $_POST['name'];
    echo $bank_name;
    sleep(3);


    if ($bank_name == "usbank" || $bank_name == "USBank" || $bank_name == "US Bank") {
        $id = 1;
    } else if ($bank_name == "Bee Hive" || $bank_name == "beehive" || $bank_name == "Beehive" || $bank_name == "BeeHive") {
        $id = 2;
    } else if ($bank_name == "BSN" || $bank_name == "bsn") {
        $id = 3;
    } else {
        $id = 0;
    }

    require('dbconnect.php');
    $db = get_db();

    try {
        // check for change in debit balance
        if ($deb_bal != 0) {
            $update_query = 'UPDATE bank_account SET debit_balance=:deb_bal WHERE id=:id AND name=1';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':deb_bal', $deb_bal);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        }
        // check for change in available credit
        if ($aval_cre != 0) {
            $update_query = 'UPDATE bank_account SET available_credit=:aval_cre WHERE id=:id AND name=1';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':aval_cre', $aval_cre);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        }
        // check for change in credit balance
        if ($cre_bal != 0) {
            $update_query = 'UPDATE bank_account SET credit_balance=:cre_bal WHERE id=:id AND name=1';
            $stmt = $db->prepare($update_query);
            $stmt->bindValue(':cre_bal', $cre_bal);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        }
    } catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: index.php");
    die();
?>