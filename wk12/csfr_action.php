<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SESSION["confirmation"] === $_POST["confirmation"]) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "host" && $password === "pass") {
            $message = "SECURE LOGIN SUCCESS!";
        } else {
            $message = "SECURE LOGIN FAILED!";
        }

    } else {
        $message = "CSRF DETECTED!";
    }
}
?>

<form method="POST">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
    <input type="submit">
</form>

<div><?php echo $message; ?></div>
