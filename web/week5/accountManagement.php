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

  // Requesting person_table information
  $query = 'SELECT bank_name FROM bank_account WHERE name=1';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $bank_names = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($bank_names as $bank_name) {
    $current_bNames = $bank_name['bank_name'];
  }
  var_dump($bank_names);
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
    <form action="applyChanges.php" method="POST">
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <span>
            <img src="menu.svg" width="30" height="30" class="d-inline-block align-top" id="menu-toggle">
            <?php echo "<h3 style='display:inline'>$current_user, lets update some entries</h3><hr>";?>
          </span>

          <h3><b>Debit</b></h3>
          <a href="#"><sup>View ledger</sup></a>
          <p><pre>   Balance: <input type="number" name="debBal"></pre></p>
          <br><br><br>
          <h3><b>Credit</b></h3>
          <a href="#"><sup>View ledger</sup></a>
          <p><pre>   Available credit: <input type="number" name="avalCre"></pre></p>
          <br>
          <p><pre>   Balance:          <input type="number" name="creBal"></pre></p>
          <br><br><br>
          <?php/*
              foreach ($current_bNames as $current_bName) {
                  echo "<label class="btn btn-secondary" style="margin-right:15px;"><input type="radio" name="nName" value="$current_bName" autocomplete="off"> $current_bName</label>";
              }*/
          ?>
          <input type="submit" value="Update entries">
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