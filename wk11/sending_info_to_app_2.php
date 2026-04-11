<!DOCTYPE html>
<html>
<head>
    <title>Sending Info To App 2</title>
</head>
<body>
    <h2>Mitigated Input Example</h2>

    <form method="get">
        <input type="text" name="q" placeholder="Enter Text">
        <br><br>
        <input type="submit" value="Go">
    </form>

    <hr>

    <?php
    if (isset($_GET['q'])) {
        echo "You entered: " . htmlentities($_GET['q']);
    }
    ?>
</body>
</html>
