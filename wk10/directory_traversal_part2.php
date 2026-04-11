<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$baseDir = __DIR__;
$input = isset($_GET['q']) ? $_GET['q'] : '.';

$input = trim($input);

// Default directory
if ($input === '.' || $input === '') {
    $safePath = $baseDir;
} else {
    // Prevent traversal
    $clean = basename($input);

    // BONUS: block filenames
    if (strpos($clean, '.') !== false) {
        die("Invalid input: filenames are not allowed.");
    }

    $safePath = $baseDir . DIRECTORY_SEPARATOR . $clean;
}

// Check if exists
if (!file_exists($safePath)) {
    die("Directory does not exist.");
}

// Check if directory
if (!is_dir($safePath)) {
    die("Only directories are allowed.");
}

print "<pre>";
print_r(scandir($safePath));
print "</pre>";
?>
