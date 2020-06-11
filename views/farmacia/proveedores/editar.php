<?php
require_once 'views/includes/header.php';
require_once 'views/includes/sidebar.php';
?>

<div class="main-panel">
    <?php
    require_once 'views/includes/navbar.php';
    ?>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Editar Proveedor</h4>
          </div>
          <div class="card-body">
            <form action="<?=URL?>proveedor/editar" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Cedula Proveedor</label>
            <input type="text" class="form-control"   name='cedula'aria-describedby="emailHelp" value="<?=$proveedor->getCedula()?>" readonly>

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control"  name='nombre' aria-describedby="emailHelp" value="<?=$proveedor->getNombre()?>">

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control"  name='direccion' aria-describedby="emailHelp"value="<?=$prodproveedoructo->getPrecioVenta()?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" name='telefono'  aria-describedby="emailHelp"value="<?=$proveedor->getPrecioCompra()?>">

              </div>
              <<div class="form-group col-md-6">/farmaciasa </label>
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
          <div class="form-group">
            <label for="exampleInputEmail1">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" aria-describedby="emailHelp" value="<?=$producto->getCantidad()?>" >

          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>

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