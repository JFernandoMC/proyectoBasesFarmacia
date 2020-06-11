<?php
require_once 'views/farmacia/includes/header.php';
require_once 'views/farmacia/includes/sidebar.php';
?>

<div class="main-panel">
  <?php
  require_once 'views/farmacia/includes/navbar.php';
  ?>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Nuevo Proveedor</h4>
          </div>
          <div class="card-body">
            <form action="<?=URL?>proveedores/nuevo" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Cedula Proveedor</label>
            <input type="text" class="form-control"   name='cedula'aria-describedby="emailHelp" >

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control"  name='nombre' aria-describedby="emailHelp" >

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control"  name='direccion' aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" name='telefono'  aria-describedby="emailHelp">

              </div>
              <<div class="form-group col-md-6">
                <label for="tipoProducto"> Ciudad </label>
                <select name="ciudad" class="form-control" required>
                <?php
                  foreach ($ciudad as $ciu) {
                  ?>
                <option value="<?= $eciump->setId_ciudad() ?>">
                      <?= $ciu->getNombre() ?>
                    </option>
                    <?php }
                  ?>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="tipoProducto"> Empresa </label>
                <select name="empresa" class="form-control" required>
                <?php
                  foreach ($empresa as $emp) {
                  ?>
                <option value="<?= $emp->setNit() ?>">
                      <?= $emp->getNombre() ?> 
                    </option>
                    <?php }
                  ?>
                </select>
              </div>
              
          </div>
          
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
          </div>
          <button type="submit" class="btn btn-primary">Crear</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once 'views/farmacia/includes/navbar.php';
?>

</div>

<?php
require_once 'views/farmacia/includes/scripts.php';
?>