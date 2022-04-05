<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <!-- detecto las posibles listas de errores ocurridos en la validacion  -->

    <?php if (isset($validation)) { ?>
        <div class="alert  alert-danger">
            <?php echo $validation->listErrors(); ?>
        </div>
    <?php } ?>

    <form method="POST" action="<?php echo base_url(); ?>/marcas/insertar" autocomplete="off">
        <!-- muestra lo que pasa con las filas que no se insertaron-->
        <?php csrf_field(); ?>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label> Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo set_value('nombre') ?>" autofocus required />
                </div>
                <div class="col-12 col-sm-6">
                    <label> Descripcion</label>
                    <input class="form-control" id="descripcion" name="descripcion" type="text" value="<?php echo set_value('descripcion') ?>" required />
                </div>
            </div>
        </div>
        <a href="<?php echo base_url(); ?>/marcas" class="btn btn-primary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->