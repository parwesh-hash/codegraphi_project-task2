
<?php
$servername = "localhost";   // usually localhost
$username = "root";          // default XAMPP user
$password = "";              // default XAMPP root password is empty
$database = "userdb";       // your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected successfully!";
}
?>
