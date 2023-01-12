<?php
include 'dbconnect.php';

$id = $_POST["id"];

$sql = "DELETE FROM task WHERE id = {$id}";

if ($conn->query($sql)) {
    echo "Task has been deleted!";
} else {
    echo "Error deleting task.";
}

$conn->close();

header('Location: ../index.php');


?>