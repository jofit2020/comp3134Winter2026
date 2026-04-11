<?php
session_start();
$_SESSION["confirmation"] = rand(1000,9999);
?>

<form method="POST" action="csfr_action.php">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION["confirmation"]; ?>">
    <input type="submit">
</form>
