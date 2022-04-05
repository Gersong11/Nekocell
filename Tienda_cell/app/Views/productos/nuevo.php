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

    <form method="POST" action="<?php echo base_url(); ?>/productos/insertar" autocomplete="off">
        <!-- muestra lo que pasa con las filas que no se insertaron-->

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Codigo</label>
                    <input class="form-control" id="codigo" name="codigo" type="text" autofocus required />
                </div>

                <div class="col-12 col-sm-6">
                    <label> Nombre(modelo)</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo set_value('nombre') ?>" required />
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
                            <option value="<?php echo $marca['id']; ?>"><?php echo $marca['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-12 col-sm-6">
                    <label> Proveedores</label>
                    <select class="form-control" id="id_proveedores" name="id_proveedores" required>
                        <option value="">Seleccionar proveedor</option>
                        <?php foreach ($proveedores as $proveedor) { ?>
                            <option value="<?php echo $proveedor['id']; ?>"><?php echo $proveedor['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label>Precio de venta</label>
                    <input class="form-control" id="precio_venta" name="precio_venta" type="text" value="<?php echo set_value('precio_venta') ?>" required />
                </div>

                <div class="col-12 col-sm-6">
                    <label>Precio de Compra</label>
                    <input class="form-control" id="precio_compra" name="precio_compra" type="text" value="<?php echo set_value('precio_compra') ?>" required />
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <label>Stock Minimo</label>
                        <input class="form-control" id="existencias" name="existencias" type="text" value="<?php echo set_value('existencias') ?>" required />
                    </div>
                    <div class="col-12 col-sm-4">
                        <label> Es inventariable</label>
                        <select name="inventariable" id="inventariable" class="form-control">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label> Tipo de producto</label>
                        <select name="tipo_producto" id="tipo_producto" class="form-control">
                            <option value="1">Celulares</option>
                            <option value="0">Accesorios</option>
                        </select>
                    </div>
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