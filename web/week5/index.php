<?php
/*require('dbconnect.php');
$db = get_db();
$query = 'SELECT debit_balance, available_credit, credit_balance, name FROM bank_account';
$stmt = $db->prepare($query);
$stmt->execute();
$bank_infos = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accounts</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Accounts and Settings
                    </a>
                </li>
                 <li>
                    <a href="index.php">Summary of Accounts</a>
                </li>
                <li>
                    <a href="account1.php">Account 1</a>
                </li>
                <li>
                    <a href="account2.php">Account 2</a>
                </li>
                <li>
                    <a href="account3.php">Account 3</a>
                </li>
                <li>
                    <a href="settings.php">Settings</a>
                </li>
                <li>
                    <a href="faq.php">FAQ</a>
                </li>
                <li>
                    <a href="help.php">Help</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <header>
                    <h1 style="color: white;">Summary of accounts</h1>
                </header>
                <br>
                <a href="#menu-toggle" class="btn btn-secondary col-md-4 col-md-offset-4" id="menu-toggle">Menu</a>

                <?php
                $temp_deb_bal;
                $temp_aval_cre;
                $temp_cre_bal;
                $total_deb_bal;
                $total_aval_cre;
                $total_cre_bal;
                foreach ($bank_infos as $bank_info) {
                    $id = $bank_info['name'];
                    if ($id == 1) {
                        global $temp_deb_bal, $temp_aval_cre, $temp_cre_bal, $total_deb_bal, $total_aval_cre, $total_cre_bal;
                        $temp_deb_bal = $bank_info['debit_balance'];
                        $total_deb_bal += $temp_deb_bal;
                        $temp_aval_cre = $bank_info['available_credit'];
                        $total_aval_cre += $temp_aval_cre;
                        $temp_cre_bal = $bank_info['credit_balance'];
                        $total_cre_bal += $temp_cre_bal;
                    }
                }
                echo "<br><br>";
                echo "<h3>Total Debit</h3>";
                echo "<a href=\"\"><sup>View ledger</sup></a>";
                echo "<p><pre>   Total balance: $total_deb_bal</pre><p>";
                echo "<br>";
                echo "<h3>Total Credit</h3>";
                echo "<a href=\"\"><sup>View ledger</sup></a>";
                echo "<p><pre>   Total available credit: $total_aval_cre</pre></p>";
                echo "<p><pre>   Total Balance: $total_cre_bal</pre></p>";
                echo "<br>";
                $x = 1;
                foreach ($bank_infos as $bank_info) {
                    $deb_bal = $bank_info['debit_balance'];
                    $aval_cre = $bank_info['available_credit'];
                    $cre_bal = $bank_info['credit_balance'];
                    $id = $bank_info['name'];
                    if ($id == 1) {
                        echo "<h5><i>Account $x Summary</i></h5>";
                        echo "<p><pre>   Debit Balance: " . $deb_bal . "</pre></p>";
                        echo "<p><pre>   Available credit: " . $aval_cre . "</pre></p>";
                        echo "<p><pre>   Credit Balance: " . $cre_bal . "</pre></p>";
                        echo "<br>";
                    }
                    $x++;
                }
                ?>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>