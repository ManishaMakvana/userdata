<?php
// Hostinger Database Connection
$host = "185.224.138.7";  // Hostinger IP
$dbname = "u450582341_interndb";  // Database name
$username = "u450582341_intern"; // Database username
$password = "7r!J7jqijYsL";  // Database password

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Check if it's an insert operation
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['update']) && !isset($_POST['delete'])) {
    // Get form data
    $name = $_POST['name'] ?? null;
    $surname = $_POST['surname'] ?? null;

    if (!$name || !$surname) {
        die("Name and Surname fields are required.");
    }

    // Prepare the SQL statement for insert
    $stmt = $conn->prepare("INSERT INTO userdata (name, surname) VALUES (?, ?)");
    if (!$stmt) {
        die("Preparation failed: " . $conn->error);
    }
    $stmt->bind_param("ss", $name, $surname);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record successfully inserted!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
}

// Check if it's an update operation
if (isset($_POST['update'])) {
    // Get form data for updating
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $surname = $_POST['surname'] ?? null;

    if (!$id || !$name || !$surname) {
        die("ID, Name, and Surname are required.");
    }

    // Prepare the SQL statement for update
    $stmt = $conn->prepare("UPDATE userdata SET name = ?, surname = ? WHERE id = ?");
    if (!$stmt) {
        die("Preparation failed: " . $conn->error);
    }
    $stmt->bind_param("ssi", $name, $surname, $id);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record successfully updated!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
}

// Check if it's a delete operation
if (isset($_POST['delete'])) {
    // Get form data for deleting
    $id = $_POST['id'] ?? null;

    if (!$id) {
        die("ID is required for deletion.");
    }

    // Prepare the SQL statement for delete
    $stmt = $conn->prepare("DELETE FROM userdata WHERE id = ?");
    if (!$stmt) {
        die("Preparation failed: " . $conn->error);
    }
    $stmt->bind_param("i", $id);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record successfully deleted!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
