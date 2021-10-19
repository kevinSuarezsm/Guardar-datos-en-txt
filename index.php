<?php
include('includes/header.php');
include('funciones.php');
?>

<link rel=StyleSheet href="estilos.css" type="text/css" media=screen>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-body">
        <form action="funciones.php" method="POST">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus required>
          </div>
          <div class="form-group">
            <label>Tipo documento</label>
            <select name="tipoDoc" class="form-control">
              <option value="Cedula">Cedula</option>
              <option value="Ti" selected>Ti</option>
            </select>
          </div>
          <div class="form-group">
            <label># documento</label>
            <input type="numeric" name="documento" class="form-control" placeholder="Documento" autofocus required>
          </div>
          <div class="form-group">
            <label>Direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder="Direccion" autofocus required>
          </div>

          <div class="form-group">
            <label>Fecha nacimiento </label>
            <input type="date" name="fechanacimiento" class="form-control" autofocus required>
          </div>
          <input type="submit" name="save" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8" style="background-color:whitesmoke;">
      <table class="table table-bordered">

        <thead>
          <tr class=titulos>
            <th>Nombre</th>
            <th>Tipo documento</th>
            <th># Documento</th>
            <th>Direccion</th>
            <th>Fecha nacimiento</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          echo llenado();
          ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<?php include('includes/footer.php'); ?>