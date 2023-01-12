<?php
include 'dbconnect.php';

$id = $_POST["id"];
$task_name = $_POST["name"];
$task_description = $_POST["description"];
$task_status = $_POST["status"];

if($_POST["status"] === "1"){
    $status = true;
} else {
    $status = false;
}

$sql = "UPDATE task SET task_name = '{$task_name}', task_description = '{$task_description}',
task_status = '{$task_status}' WHERE id = {$id}";

if ($conn->query($sql)) {
    echo "Task has been updated!";
} else {
    echo "Error updating task.";
}

$conn->close();

header('Location: ../index.php');


?>