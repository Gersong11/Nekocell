<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo; ?></h1>
    <p class="mb-4">Web para implementar sistema de ventas y inventario de ÑEKOCELL</p>

    <?php if (isset($validation)) { ?>
        <div class="alert  alert-danger">
            <?php echo $validation->listErrors(); ?>
        </div>
    <?php } ?>

    <form method="POST" action="<?php echo base_url(); ?>/configuracion/actualizar" autocomplete="off">
        <!-- muestra lo que pasa con las filas que no se insertaron-->
        <?php csrf_field(); ?>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label> Nombre de la tienda</label>
                    <input class="form-control" id="tienda_nombre" name="tienda_nombre" type="text" value="<?php echo $nombre['valor']; ?>"  required />
                </div>
                <div class="col-12 col-sm-6">
                    <label> Identificacion tienda </label>
                    <input class="form-control" id="tienda_Id" name="tienda_Id" type="text" value="<?php echo $tienda_Id['valor']; ?>" required />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label> Telefono de la tienda </label>
                    <input class="form-control" id="tienda_telefono" name="tienda_telefono" type="text" value="<?php echo $tienda_telefono['valor']; ?>" required />
                </div>
                <div class="col-12 col-sm-6">
                    <label> Direccion de la tienda </label>
                    <textarea class="form-control" name="tienda_direccion" id="tienda_direccion" required> <?php echo $tienda_direccion['valor']; ?>  </textarea>
                </div>

                <div class="col-12 col-sm-6">
                    <label> Mensaje del ticket </label>
                    <textarea class="form-control" name="ticket_descripcion" id="ticket_descripcion" required> <?php echo $ticket_descripcion['valor']; ?>  </textarea>
                </div>
            </div>
        </div>
        <a href="<?php echo base_url(); ?>/configuracion" class="btn btn-primary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

















<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Desea eliminar este registro ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Confirmar</a>
            </div>
        </div>
    </div>
</div>