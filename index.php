<?php
// Include database connection
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    
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

    <!-- Welcome Section -->
    <div class="welcome-section animate__animated animate__fadeIn">
        <h2>Welcome to Task Manager</h2>
        <p>
            Organize your work and life with our simple and intuitive task management application. 
            Keep track of your tasks, add new ones, edit existing tasks, and stay productive.
        </p>
    </div>
</body>
</html>