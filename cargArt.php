<?php
    header('Content-Type: text/html; charset=utf-8');
    include_once 'cone.php';  
    $id = $_GET["id"];   
    $sql="select * from puzzles where id=$id";
    $stmt = $conn->query($sql);
    while ($row = $stmt->fetch_assoc()) {    
        $formulario = "<div class=\"foto\"><img src=\"{$row['portada']}\"></div><div id=\"detalles\">";
        $formulario .= "<p id=\"id\" class=\"ocult\"> {$row['id']} </p>";
        $formulario .= "<h3>Puzzle: <input disabled id=\"descripcion\" type=\"text\" name=\"desc\" value=\"{$row['descrip']}\"></h3>";
        $formulario .= "<h4>Nº piezas <input disabled id=\"piezas\" type=\"text\" name=\"nPiez\" value=\"{$row['num_piezas']}\"></h4>";
        $formulario .= "<p>Marca: <input disabled id=\"marca\" type=\"text\" name=\"marca\" value=\"{$row['marca']}\"></p>";
        $formulario .= "<p>Portada: <input disabled id=\"portada\" type=\"text\" name=\"port\" value=\"{$row['portada']}\"></p>";
        $formulario .= "<button onClick=\"nuevo()\">Nuevo</button></br>";
        $formulario .= "<button onClick=\"eliminar($id)\">Eliminar</button></br>";
        $formulario .= "<button onClick=\"modificar()\" id=\"modif\">Modificar</button></br>";
        $formulario .= "<button class=\"ocult\" id=\"ocult\" onclick=\"grabar()\">Grabar</button>";
        $formulario .= "</div></div>";
    }
    echo $formulario;
    
?>