<?php
    header('Content-Type: text/html; charset=utf-8');
    include_once 'cone.php'; 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{$m = '';}
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
    $sql = "UPDATE puzzles  
    SET marca=?, num_piezas=?, descrip=?, portada=?
    WHERE id=?";    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sissi", $m, $n, $d, $p, $id);
    $stmt->execute();
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }
    if ($stmt->error) {
        die("Error al ejecutar la consulta: " . $stmt->error);
    }
    
    $stmt->close();
?>