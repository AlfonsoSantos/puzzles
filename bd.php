<?php
    header('Content-Type: text/html; charset=utf-8');
    include_once 'cone.php';      
    $sql="select * from puzzles";
    $stmt = $conn->query($sql);
    $table = "<table>
                <tr>
                <th>Id</th>
                <th>Marca</th>
                <th>Piezas</th>
                <th>Descripción</th>
                </tr>";
    while ($row = $stmt->fetch_assoc()) {
        $table .= "<tr>";
        $table .= "<td> {$row['id']} </td>";
        $table .= "<td> {$row['marca']} </td>";
        $table .= "<td> {$row['num_piezas']} </td>";
        $table .= "<td onClick=\"cargarArt({$row['id']})\"> {$row['descrip']} </td>";
        $table .= "</tr>";
    }
    $table .= "</table>";
    $stmt->close();
    echo $table;

?>