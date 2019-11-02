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
    <form action="createNewAccount.php" method="POST">
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <span>
            <img src="menu.svg" width="30" height="30" class="d-inline-block align-top" id="menu-toggle">
            <?php echo "<h3 style='display:inline'>$current_user, adding a new Bank entry?</h3>";?>
          </span>

          <h3><b>Please enter the following information:</b></h3>
          <p>Current banks we serve:
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-secondary active">
                <input type="radio" autocomplete="off"> Wells Fargo |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> Citi |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> US Bankcorp/U.S. Bank |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> PNC |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> Bank of New York Mellon |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> State Street |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> Capital One |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> TD Bank |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> Mountain America |
              </label>
              <label class="btn btn-secondary">
                <input type="radio" autocomplete="off"> BeeHive FCU
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