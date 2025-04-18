<?php
    header('Content-Type: text/html; charset=utf-8');
    include_once 'cone.php';  
    $id = $_GET["id"];   
    $sql="delete  from puzzles where id=$id";
    $stmt = $conn->query($sql);

    
?>