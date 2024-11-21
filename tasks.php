<?php
// Include database connection
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks - Task Manager</title>
    
    <!-- External CSS and Animation Libraries -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="navbar-brand">
                <i class="fas fa-tasks"></i> Task Manager
            </a>
            <div class="navbar-menu">
                <a href="index.php" class="navbar-link">Home</a>
                <a href="tasks.php" class="navbar-link">Tasks</a>
                <a href="add_task.php" class="navbar-link">Add Task</a>
            </div>
        </div>
    </nav>

    <!-- Task Table -->
    <div class="form-container animate__animated animate__fadeInUp">
        <h2>Your Tasks</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch tasks from the database
                $result = $conn->query("SELECT * FROM tasks");

                // Check if any tasks are returned
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['title']}</td>
                                <td>{$row['description']}</td>
                                <td>
                                    <a href='edit_task.php?id={$row['id']}'><i class='fas fa-edit'></i> Edit</a>
                                    <a href='delete_task.php?id={$row['id']}'><i class='fas fa-trash'></i> Delete</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No tasks found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html> 