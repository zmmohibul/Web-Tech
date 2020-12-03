<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/lab-task-6/views/home.php');
?>