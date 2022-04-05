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

    <form method="POST" action="<?php echo base_url(); ?>/clientes/insertar" autocomplete="off">
        <!-- muestra lo que pasa con las filas que no se insertaron-->

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" autofocus required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Cedula </label>
                    <input class="form-control" id="cedula" name="cedula" type="text" value="<?php echo set_value('cedula') ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Direccion</label>
                    <input class="form-control" id="direccion" name="direccion" type="text" autofocus required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Telefono </label>
                    <input class="form-control" id="telefono" name="telefono" type="text" value="<?php echo set_value('telefono') ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Email</label>
                    <input class="form-control" id="email" name="email" type="text" value="<?php echo set_value('email') ?>" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Tipo de cliente</label>
                    <select name="mayorista" id="mayorista" class="form-control">
                        <option value="1">Mayorista</option>
                        <option value="0">Minorista</option>
                    </select>
                </div>
            </div>
        </div>

        <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->