<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "host" && $password === "pass") {
        $message = "Login SUCCESS!";
    } else {
        $message = "Login FAILED!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>CSRF Login Form</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

<div>
    <?php echo $message; ?>
</div>

</body>
</html>
