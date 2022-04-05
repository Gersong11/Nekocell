<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <!-- detecto las posibles listas de errores ocurridos en la validacion  -->
    <?php \Config\Services::validation()->listErrors(); ?>
    <form method="POST" action="<?php echo base_url(); ?>/clientes/actualizar" autocomplete="off">
        <!-- muestra lo que pasa con las filas que no se insertaron-->
        <?php csrf_field(); ?>

        <input type="hidden" id="id" name="id" value="<?php echo $cliente['id']; ?>" />

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $cliente['nombre']; ?>" autofocus required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Cedula</label>
                    <input class="form-control" id="cedula" name="cedula" type="text" value="<?php echo $cliente['cedula']; ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Direccion</label>
                    <input class="form-control" id="direccion" name="direccion" type="text" value="<?php echo $cliente['direccion']; ?>"  required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Telefono</label>
                    <input class="form-control" id="telefono" name="telefono" type="text" value="<?php echo $cliente['telefono']; ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">

                <div class="col-12 col-sm-6">
                    <label>Email</label>
                    <input class="form-control" id="email" name="email" type="text" value="<?php echo $cliente['email']; ?>" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Tipo de cliente</label>
                    <select name="mayorista" id="mayorista" class="form-control">
                        <option value="1" <?php if ($cliente['mayorista'] == 1) {
                                                echo 'selected';
                                            } ?>> Mayorista </option>
                        <option value="0" <?php if ($cliente['mayorista'] == 0) {
                                                echo 'selected';
                                            } ?>> Minorista </option>
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