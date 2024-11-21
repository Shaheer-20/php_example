<?php
// Include database connection
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to tasks page with success message
        header("Location: tasks.php?success=1");
        exit();
    } else {
        // Redirect to add task page with error message
        header("Location: add_task.php?error=" . urlencode($conn->error));
        exit();
    }
}

// Close the connection
$conn->close();
?>