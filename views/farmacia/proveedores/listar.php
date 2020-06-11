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
                        <h4 class="card-title"> Listado de Proveedores</h4>
                        <a href="<?=URL?>proveedor/nuevo"> Agregar Proveedores </a>
                    </div>
              
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Cedula
                                    </th>
                                    <th>
                                        nombre
                                    </th>
                                    <th>
                                        Direccion
                                    </th>
                                    <th>
                                        Telefono
                                    </th>
                                    <th>
                                        Ciudad
                                    </th>
                                    <th>
                                        Empresa
                                    </th>
                                    <th>
                                        Acciones
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lista_proveedores as $proveedor) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $proveedor->getCedula() ?>
                                            </td>
                                            <td>
                                                <?= $proveedor->getNombre() ?>
                                            </td>
                                            <td>
                                                <?= $proveedor->getDireccion() ?>
                                            </td>
                                            <td>
                                                <?= $proveedor->getTelefono() ?>
                                            </td>
                                            <td>
                                                <?= $proveedor->getCiudad() ?>
                                            </td>
                                            <td>
                                                <?= $proveedor->getNit_empresa() ?>
                                            </td>
                                            <td>
                                               <a href="<?=URL?>proveedor/eliminar/<?= $proveedor->getCedula()?>"> Eliminar</a>
                                               <a href="<?=URL?>proveedor/editar/<?= $proveedor->getCedula()?>"> Editar</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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