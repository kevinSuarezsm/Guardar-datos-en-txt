<?php

$f = file("Archivo/Datos.txt");

if (isset($_GET['id'])) {
  $nombre = $_GET['nombre'];
  $documento = $_GET['id'];

  $fi = fopen("Datos.txt", "w+");
  for ($i = 0; $i < count($f); $i++) {
    $a = explode(",", $f[$i]);
    if ($a[0] != $nombre and $a[2] != $documento) {
      fwrite($fi, $f[$i]);
    }
  }
  header('Location: index.php');
  fclose($fi);
}
