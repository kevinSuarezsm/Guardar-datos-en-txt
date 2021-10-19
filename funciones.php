<?php

$f = file("Archivo/Datos.txt");

function llenado()
{
    $f = file("Archivo/Datos.txt");
    $r = "";
    for ($i = 0; $i < count($f); $i++) {
        $a = explode(",", $f[$i]);
        $r .= "<tr>";
        $r .= "<td>" . $a[0] . "</td>";
        $r .= "<td>" . $a[1] . "</td>";
        $r .= "<td>" . $a[2] . "</td>";
        $r .= "<td>" . $a[3] . "</td>";
        $r .= "<td>" . $a[4] . "</td>";
        $nombre = $a[0];
        $tipoDocumento = [1];
        $documento = $a[2];
        $r.= "<td><a href='delete.php?id=$documento & nombre=$nombre' class='btn btn-danger'>ELIMINAR</a></td>";  
        $r .= "</tr>";
    }
    return $r;
}

if (isset($_POST['save'])) {

    $nombre = $_POST['nombre'];
    $tipoDocumento = $_POST['tipoDoc'];
    $documento = $_POST['documento'];
    $direccion = $_POST['direccion'];
    $fechaNacimiento = $_POST['fechanacimiento'];
    $ingreso = $nombre . "," . $tipoDocumento . "," . $documento . "," . $direccion . "," . $fechaNacimiento . PHP_EOL;
    $fi = fopen("Datos.txt", "w+");
    for ($i = 0; $i < count($f); $i++) {
        fwrite($fi, $f[$i]);
    }
    fwrite($fi, $ingreso);
    header('Location: index.php');
    fclose($fi);
    
}