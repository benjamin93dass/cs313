<p>Bank:
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
    <input type="radio" name="nName" value="PNC" autocomplete="off"> PNC
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

<?php
    $x = 1;
    foreach ($bank_names as $bank_name) {
        echo "<label class="btn btn-secondary" style="margin-right:15px;"><input type="radio" name="nName" value="$bank_name" autocomplete="off"> $bank_name</label>";
    }
?>

        $x = 1;
        foreach ($bank_infos as $bank_info) {
            $deb_bal = $bank_info['debit_balance'];
            $aval_cre = $bank_info['available_credit'];
            $cre_bal = $bank_info['credit_balance'];
            $id = $bank_info['name'];
            $name = $bank_info['bank_name'];
            if ($id == 1) {
                echo "<h5><i>Account $name Summary</i></h5>";
                echo "<p><pre>   Debit Balance: " . $deb_bal . "</pre></p>";
                echo "<p><pre>   Available credit: " . $aval_cre . "</pre></p>";
                echo "<p><pre>   Credit Balance: " . $cre_bal . "</pre></p>";
                echo "<br>";
            }
            $x++;
        }