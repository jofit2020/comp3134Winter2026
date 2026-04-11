<!DOCTYPE html>
<html>
<head>
    <title>Sending Info To App 1</title>
</head>
<body>
    <h2>Unmitigated Input Example</h2>

    <form method="get">
        <input type="text" name="q" placeholder="Enter Text">
        <br><br>
        <input type="submit" value="Go">
    </form>

    <hr>

    <?php
    if (isset($_GET['q'])) {
        echo "You entered: " . $_GET['q'];
    }
    ?>
</body>
</html>
