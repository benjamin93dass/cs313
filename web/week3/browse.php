<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Browse</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form method="post" action="view.php">
            <p>Please select from the following:<br></p>
            <select name="itemsInCart[]" multiple>
            <option value="watch">Watch</option>
            <option value="table">Table</option>
            <option value="laptop">Laptop</option>
            <option value="chair">Chair</option>
            </select>
            <input type="submit" name="submit" value="View cart">
        </form>
    </body>
</html>