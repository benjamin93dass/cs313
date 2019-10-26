        <!-- Page Content -->
        <form action="applyChanges.php" method="POST">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <header>
                    <h1 style="color: white;">Add an entry</h1>
                </header>
                <br>
                <a href="#menu-toggle" class="btn btn-secondary col-md-4 col-md-offset-4" id="menu-toggle">Menu</a>
                <div class="col-md-offset-4">
                    <br><br>
                    <h3><b>Debit</b></h3>
                    <a href="#"><sup>View ledger</sup></a>
                    <p><pre class="col-md-4 col-md-offset-1">    Debit Balance: <input type="number" name="debBal"></pre></p>
                    <br><br><br>
                    <h3><b>Credit</b></h3>
                    <a href="#"><sup>View ledger</sup></a>
                    <p><pre class="col-md-4 col-md-offset-1">   Available credit: <input type="number" name="avalCre"></pre></p>
                    <br><br><br>
                    <p><pre class="col-md-4 col-md-offset-1">   Credit Balance: <input type="number" name="creBal"></pre></p>
                    <br><br><br><br><br>
                    <pre class="col-md-6">         Bank name: <input type="text" name="bank_name">   <input type="submit" value="Update entries"> </pre>
                    <br><br>
                </div>
            </div>
        </div>
        </form>
        <!-- /#page-content-wrapper -->