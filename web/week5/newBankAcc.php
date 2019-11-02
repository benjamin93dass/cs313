<?php
  require('dbconnect.php');
  $db = get_db();
  $query = 'SELECT * FROM username';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $usernames = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($usernames as $username) {
    $current_username = $username['username'];
  }
  
  // Requesting person_table information
  $query = 'SELECT * FROM person';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $person_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($person_names as $person_name) {
    $current_user = $person_name['person_name'];
  }

  $query = 'SELECT bank_name FROM bank_account WHERE name=1';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $bank_names = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $total_available_banks = 10;
  $allBanks = array("US Bank", "BeeHive", "BSN", "Wells Fargo", "TD Bank", "New York - Melon", "Mountain America", "Capitol One", "Citi", "State Street");
  foreach ($bank_names as $bank_name) {
    for($x = 0; $x <= 9; $x++){
      if ($allBanks[$x] == $bank_name['bank_name']){
        unset($allBanks[$x]);
        $total_available_banks--;
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Bank</title>

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
        <li class="sidebar-brand"><?php echo "<span style='display:inline;color:#CCCC99'><i>Current user: </i><b> $current_username </b></span>" ?></li>
        <li><a href="index.php">Summary of Accounts</a></li>
        <li><a href="accountManagement.php">Account management</a></li>
        <li><a href="newBankAcc.php">+ Add a new Bank</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="help.php">Help</a></li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper --> 

    <!-- Page Content -->
    <form action="r_newBankAcc.php" method="POST">
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <span>
            <img src="menu.svg" width="30" height="30" class="d-inline-block align-top" id="menu-toggle">
            <?php echo "<h3 style='display:inline'>$current_user, adding a new Bank entry?</h3>";?>
          </span>

          <h3><b>Please enter the following information:</b></h3>
          <p>New Banks you can add:
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <?php
              //var_dump($total_available_banks);
                for ($x = 0; $x = $total_available_banks; $x++) {
                  var_dump($x);
                  
                  //var_dump($allBanks[$x]);
                  //echo "<label class='btn btn-secondary' style='margin-right:15px;'><input type='radio' name='nName' value='" . $allBanks[$x] . "' autocomplete='off'>" . $allBanks[$x] . "</label>";
                }
              ?>
            </div>
          </p>
          <br>
          <p><pre>   Debit balance: <input type="number" name="nDebBal"></pre></p>
          <br>
          <p><pre>   Available credit:          <input type="number" name="nAvalCre"></pre></p>
          <br>
          <p><pre>   Credit balance:          <input type="number" name="nCreBal"></pre></p>
          <button>Add account</button>
          <br><br>
        </div>
        <!-- page-content-wrapper -->
      </div>
    </form>
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