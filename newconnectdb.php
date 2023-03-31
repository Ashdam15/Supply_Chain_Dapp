<?php
include 'addproduct.php';

$prodname = $_POST['prodname'];
$des = $_POST['des'];
$price = $_POST['price'];
echo $prodname;

// Get form data

// Create a new mysqli object and connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'supplychain');

// Check if the connection was successful
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Insert form data into SQL table
$query = "INSERT INTO products ('Name', 'Description','Price') VALUES ('$prodname', '$des','$price')";
$result = $mysqli->query($query);

// Check if the query was successful
if (!$result) {
    die('Query Error (' . $mysqli->errno . ') ' . $mysqli->error);
}

// Print success message
echo 'Form submitted successfully!';

// Close database connection
$mysqli->close();

?>
