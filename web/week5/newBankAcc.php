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

  $allBanks = array("US Bank", "BeeHive", "BSN", "Wells Fargo", "TD Bank", "New York - Melon", "Mountain America", "Capitol One", "Citi", "State Street");
  $query = 'SELECT bank_name FROM bank_account WHERE name=1';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $bank_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($bank_names as $bank_name) {
    foreach ($allBanks as $allBank) {
      /*x = 0;
      if ($allBank == $bank_name){
        unset($allBanks[x]);
      }
      x++;*/
    }
  }
  var_dump($allBanks);
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
          <p>Current banks we serve:
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="Wells Fargo" autocomplete="off"> Wells Fargo
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="Citi" autocomplete="off"> Citi
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="US Bank" autocomplete="off"> US Bankcorp/U.S. Bank
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="BSN" autocomplete="off"> BSN
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="New York - Mellon" autocomplete="off"> Bank of New York Mellon
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="State Street" autocomplete="off"> State Street
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="Capitol One" autocomplete="off"> Capital One
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="TD Bank" autocomplete="off"> TD Bank
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="Mountain America" autocomplete="off"> Mountain America
              </label>
              <label class="btn btn-secondary" style="margin-right:15px;">
                <input type="radio" name="nName" value="BeeHive FCU" autocomplete="off"> BeeHive FCU
              </label>
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