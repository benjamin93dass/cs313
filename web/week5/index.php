<?php
  // Requesting table information
  require('dbconnect.php');
  $db = get_db();
  $query = 'SELECT debit_balance, available_credit, credit_balance, name FROM bank_account';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $bank_infos = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Fetching and calculating total balances
  $temp_deb_bal = $temp_aval_cre = $temp_cre_bal = $total_deb_bal = $total_aval_cre = $total_cre_bal = 0;
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

  // Requesting person_table information
  //require('dbconnect.php');
  //$db = get_db();
  $query = 'SELECT * FROM person';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $person_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($person_names as $person_name) {
    $current_user = $person_name['person_name'];
  }

  // Requesting username_table information

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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>

<body>

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Menu
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
                  <a href="help.php">Help</a>
                </li>
            </ul>
    </div>
    <!-- /#sidebar-wrapper -->    

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
      <span>
        <img src="menu.svg" width="30" height="30" class="d-inline-block align-top" id="menu-toggle">
        <?php echo "<h3 style='display:inline'>Welcome $current_user!</h3>";?>
      </span>
     
    
      <?php
        // Welcoming current user
        
        echo "<hr><h3>Account summaries</h3>";

        // Displaying total balances
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
        
        // Displaying summary of accounts
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