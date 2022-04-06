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

    <form method="POST" action="<?php echo base_url(); ?>/usuarios/insertar" autocomplete="off">
        <!-- muestra lo que pasa con las filas que no se insertaron-->

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Usuario</label>
                    <input class="form-control" id="usuario" name="usuario" type="text" value="<?php echo set_value('usuario') ?>" autofocus required/>
                </div>

                <div class="col-12 col-sm-6">
                    <label> Nombre de usuario</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo set_value('nombre') ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Password</label>
                    <input class="form-control" id="password" name="password" type="password" value="<?php echo set_value('password') ?>" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label>Confirmar Password</label>
                    <input class="form-control" id="repassword" name="repassword" type="password" value="<?php echo set_value('repassword') ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Caja</label>
                    <select class="form-control" id="id_caja" name="id_caja" required>
                        <option value="">Seleccionar Caja</option>
                        <?php foreach ($cajas as $caja) { ?>
                            <option value="<?php echo $caja['id']; ?>"><?php echo $caja['nombre_caja']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="col-12 col-sm-6">
                    <label> Rol</label>
                    <select class="form-control" id="id_rol" name="id_rol" required>
                        <option value="">Seleccionar rol</option>
                        <?php foreach ($roles as $rol) { ?>
                            <option value="<?php echo $rol['id']; ?>"><?php echo $rol['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>

        <a href="<?php echo base_url(); ?>/usuarios" class="btn btn-primary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->