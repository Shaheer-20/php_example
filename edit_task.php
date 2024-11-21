<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tasks WHERE id = $id");
$task = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $conn->query("UPDATE tasks SET title = '$title', description = '$description' WHERE id = $id");
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form method="POST">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required>
        <br>
        <label>Description:</label>
        <textarea name="description" required><?php echo $task['description']; ?></textarea>
        <br>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>
