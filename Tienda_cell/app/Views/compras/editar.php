<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <!-- detecto las posibles listas de errores ocurridos en la validacion  -->
    <?php \Config\Services::validation()->listErrors(); ?>
    <form method="POST" action="<?php echo base_url(); ?>/productos/actualizar" autocomplete="off">
        <!-- muestra lo que pasa con las filas que no se insertaron-->
        <?php csrf_field(); ?>

        <input type="hidden" id="id" name="id" value="<?php echo $producto['id']; ?>" />

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Codigo</label>
                    <input class="form-control" id="codigo" name="codigo" type="text" value="<?php echo $producto['codigo']; ?>" autofocus required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $producto['nombre']; ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Marcas</label>
                    <select class="form-control" id="id_marcas" name="id_marcas" required>
                        <option value="">Seleccionar marca</option>
                        <?php foreach ($marcas as $marca) { ?>
                            <option value="<?php echo $marca['id']; ?>" <?php
                                                                        if ($marca['id'] == $producto['id_marcas']) {
                                                                            echo 'selected';
                                                                        } ?>>
                                <?php echo $marca['nombre']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-12 col-sm-6">
                    <label> Proveedores</label>
                    <select class="form-control" id="id_proveedores" name="id_proveedores" required>
                        <option value="">Seleccionar proveedor</option>
                        <?php foreach ($proveedores as $proveedor) { ?>
                            <option value="<?php echo $proveedor['id']; ?>" <?php
                                                                            if ($proveedor['id'] == $producto['id_proveedores']) {
                                                                                echo 'selected';
                                                                            } ?>>
                                <?php echo $proveedor['nombre']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Precio de venta</label>
                    <input class="form-control" id="precio_venta" name="precio_venta" type="text" value="<?php echo $producto['precio_venta']; ?>" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Es inventariable</label>
                    <select name="inventariable" id="inventariable" class="form-control">
                        <option value="1" <?php if ($producto['inventariable'] == 1) {
                                                echo 'selected';
                                            } ?>> Si </option>
                        <option value="0" <?php if ($producto['inventariable'] == 0) {
                                                echo 'selected';
                                            } ?>> No </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label> Tipo producto</label>
                    <select name="tipo_producto" id="tipo_producto" class="form-control">
                        <option value="1" <?php if ($producto['tipo_producto'] == 1) {
                                                echo 'selected';
                                            } ?>> Celulares </option>
                        <option value="0" <?php if ($producto['tipo_producto'] == 0) {
                                                echo 'selected';
                                            } ?>> Accesorios </option>
                    </select>
                </div>

                <div class="col-12 col-sm-6">
                    <label>Existencias</label>
                    <input class="form-control" id="existencias" name="existencias" type="text" value="<?php echo $producto['existencias']; ?>" required />
                </div>
            </div>
        </div>


        <a href="<?php echo base_url(); ?>/productos" class="btn btn-primary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->