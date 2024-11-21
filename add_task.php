<?php
// Include database connection
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task - Task Manager</title>
    
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

    <!-- Form for Adding a New Task -->
    <div class="form-container animate__animated animate__fadeInUp">
        <h2>Add New Task</h2>
        <form action="process_task.php" method="POST">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Enter task title" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Enter task description" rows="4" required></textarea>

            <button type="submit" class="add-task-btn">
                <i class="fas fa-plus"></i> Add Task
            </button>
        </form>
    </div>
</body>
</html>