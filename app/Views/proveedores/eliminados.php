<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <p class="mb-4">Web para implementar sistema de ventas y inventario de ÑEKOCELL</p>

    <div>
        <p>
            <a href="<?php echo base_url(); ?>/proveedores" class ="btn btn-warning">Proveedores</a> 
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
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Descripcion</th>
                            <th>Direccion</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $dato){ ?>


                            <tr>
                                <td><?php echo $dato['id']; ?></td>
                                <td><?php echo $dato['nombre']; ?></td>
                                <td><?php echo $dato['telefono']; ?></td>
                                <td><?php echo $dato['descripcion']; ?></td>
                                <td><?php echo $dato['direccion']; ?></td>

                                <td><a href="<?php echo base_url(). '/proveedores/reingresar/'. $dato['id']; ?>" class ="btn btn-primary"><i class="fas fa-arrow-circle-up"></i></a></td>

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