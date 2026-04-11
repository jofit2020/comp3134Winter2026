<?php
$commonPasswords = [
    "123456",
    "123456789",
    "12345",
    "qwerty",
    "password",
    "1234567",
    "12345678",
    "123123",
    "111111",
    "1234567890"
];

$authenticated = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    if (in_array($password, $commonPasswords)) {
        $authenticated = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weak Password</title>
</head>
<body>
<?php if ($authenticated): ?>
    <h1>Successfully authenticated</h1>
<?php else: ?>
    <h1>Weak Password</h1>
    <form method="post">
        <label>Password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>
