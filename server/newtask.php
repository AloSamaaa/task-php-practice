<?php

include 'dbconnect.php';

$task_name = $_POST["name"];
$task_description = $_POST["description"];
$task_status = $_POST["status"];


if($_POST["status"] === "1"){
    $status = true;
} else {
    $status = false;
}

$sql = "INSERT INTO task (task_name, task_description, task_status) VALUES
     ('{$task_name}', '{$task_description}', '{$task_status}');";

if ($conn->query($sql)) {
    echo "New task has been added!";
} else {
    echo "Error adding task.";
}

$conn->close();

header('Location: ../index.php');
?>