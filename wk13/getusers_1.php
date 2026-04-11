<?php
$host = "localhost";
$user = "labuser";
$password = "labpass123";
$database = "wk13lab";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$results = null;

if (isset($_GET['q'])) {
    $queryValue = $_GET['q'];
    $sql = "SELECT * FROM users WHERE firstname = '$queryValue' AND active = 1";
    $results = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>getusers_1</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 6px;
        }
    </style>
</head>
<body>
    <h2>Search Users by First Name</h2>

    <form method="GET">
        <input type="text" name="q" placeholder="Enter first name">
        <input type="submit" value="Search">
    </form>

    <br>

    <?php if ($results !== null): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Active</th>
            </tr>

            <?php if ($results && $results->num_rows > 0): ?>
                <?php while ($row = $results->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['active']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No results found</td>
                </tr>
            <?php endif; ?>
        </table>
    <?php endif; ?>
</body>
</html>
