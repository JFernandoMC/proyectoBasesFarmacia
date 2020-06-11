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
                        <h4 class="card-title"> Listado de Clientes</h4>
                        <a href="<?=URL?>clientes/nuevo"> Agregar  Cliente</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Cedula
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Direccion
                                    </th>
                                    <th>
                                        Ciudad
                                    </th>
                                    <th>
                                        Sexo
                                    </th>
                                    <th>
                                        Telefono
                                    </th>
                                    <th>
                                        Acciones
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($lista_clientes as $cliente) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $cliente->getCedula() ?>
                                            </td>
                                            <td>
                                                <?= $cliente->getNombre() ?>
                                            </td>
                                            <td>
                                                <?= $cliente->getDireccion() ?>
                                            </td>
                                            <td>
                                                <?= $cliente->getCiudad() ?>
                                            </td>
                                            <td>
                                                <?= $cliente->getSexo() ?>
                                            </td>
                                            <td>
                                                <?= $cliente->getTelefono() ?>
                                            </td>
                                            
                                            <td>
                                               <a href="<?=URL?>clientes/eliminar/<?= $cliente->getCedula()?>"> Eliminar</a>
                                               <a href="<?=URL?>clientes/editar/<?= $cliente->getCedula()?>"> Editar</a>
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