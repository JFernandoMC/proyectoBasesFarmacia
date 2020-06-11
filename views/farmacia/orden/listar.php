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
                        <h4 class="card-title"> Listado de Ordenes</h4>
                        <a href="<?= URL ?>ordenes/nuevo"> Agregar Orden </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        codigo
                                    </th>
                                    <th>
                                        Cliente
                                    </th>
                                    <th>
                                        Productos
                                    </th>
                                    <th>
                                        Cantidad
                                    </th>
                                    <th>
                                        Pago
                                    </th>
                                    <th>
                                        Fecha
                                    </th>
                                    <th>
                                        Usuario
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    orden
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listado_orden as $orden) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $orden->getCod_orden() ?>
                                            </td>
                                            <td>
                                                <?= $orden->getCod_cliente() ?>
                                            </td>
                                            <td>
                                                <?= $orden->getCod_producto() ?>
                                            </td>
                                            <td>
                                                <?= $orden->getCantidad() ?>
                                            </td>
                                            <td>
                                                <?= $orden->getCod_metodoPago() ?>
                                            </td>
                                            <td>
                                                <?= $orden->getFecha() ?>
                                            </td>
                                            <td>
                                                <?= $orden->getUsuario() ?>
                                            </td>
                                            <td>
                                                <?= $orden->getMonto() ?>
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