<?php
    header('Content-Type: text/html; charset=utf-8');
    include_once 'cone.php'; 
    $id='default';
    if(isset($_GET['m'])){
        $m = $_GET['m'];
    }else{$m = '';}
    if(isset($_GET['n'])){
        $n = $_GET['n'];
    }else{$n = '';}
    if(isset($_GET['d'])){
        $d = $_GET['d'];
    }else{$d = '';}
    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }else{$p = '';}
    
    $sql = "INSERT INTO puzzles  VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isiss", $id, $m, $n, $d, $p);
    $stmt->execute();
    $stmt->close();
?>