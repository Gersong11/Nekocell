<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <p class="mb-4">Web para implementar sistema de ventas y inventario de ÑEKOCELL</p>

    <div>
        <p>
            <a href="<?php echo base_url(); ?>/clientes" class="btn btn-warning">Clientes</a>
        </p>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de <?php echo $titulo; ?> </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cedula</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Mayorista</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $dato) { ?>
                            <tr>
                            <td><?php echo $dato['nombre']; ?></td>
                                <td><?php echo $dato['cedula']; ?></td>
                                <td><?php echo $dato['direccion']; ?></td>
                                <td><?php echo $dato['telefono']; ?></td>
                                <td>
                                    <?php
                                    if ($dato['mayorista'] == 1) {
                                        echo ("Mayorista");
                                    } else {
                                        echo ("Minorista");
                                    }
                                    ?>
                                </td>

                                <td><a href="#" data-href="<?php echo base_url() . '/clientes/reingresar/' . $dato['id']; ?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Reingresar registro" class="btn btn-warning"><i class="fas fa-arrow-circle-up"></i></a></td>

                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reingresar registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Desea Reingresar este registro ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Confirmar</a>
            </div>
        </div>
    </div>
</div>