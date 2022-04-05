<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>

    <form method="POST" action="<?php echo base_url(); ?>/proveedores/insertar" autocomplete="off">
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label> Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" autofocus required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Telefono</label>
                    <input class="form-control" id="telefono" name="telefono" type="text" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Descripcion</label>
                    <input class="form-control" id="descripcion" name="descripcion" type="text" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Direccion</label>
                    <input class="form-control" id="direccion" name="direccion" type="text" required />
                </div>
            </div>
        </div>
        <a href="<?php echo base_url(); ?>/proveedores" class="btn btn-primary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->