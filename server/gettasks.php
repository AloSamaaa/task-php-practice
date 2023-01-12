<?php
include 'dbconnect.php';

$sql = "SELECT task_name, task_description, task_status FROM task";
$result = $conn->query($sql);

$tasks = array();

if ($result->num_rows > 0) {
    while($task = $result->fetch_assoc()) {
        array_push($tasks, $task);
    }
    echo json_encode($tasks);
}else{
    echo "No task available.";
}

$conn->close();

?>