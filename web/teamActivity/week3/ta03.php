<!DOCTYPE html>
<html>
<body>
    <form method='post' action='display.php'>
        Name: <input type='text' name='person'><br>
        Email: <input type='text' name='email'><br>
        <p>Major:</p>
        <input type='radio' name='major' value='cs'>Computer Science<br>
        <input type='radio' name='major' value='cit'>CIT<br>
        <input type='radio' name='major' value='wdd'>WDD<br>
        <input type='radio' name='major' value='compe'>CompE<br>
        <br>
        <textarea rows='20' cols='100' name='textarea'></textarea>
        <br>
        

        <p>Where you been bruh?</p>

        <?php
        $continents = array('NA', 'SA', 'EU', 'AS', 'AU', 'AF', 'AN');
        foreach($continents as $continent) {
            echo "<input type='checkbox' name='cont[]' value='$continent'>$continent<br>";
        };
        ?>

        <input type='submit' name='submit' value='Send me away!'>
    </form>
</body>
</html>