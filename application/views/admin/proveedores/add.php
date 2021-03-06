<section class="content-header">
    <h1>
        Proveedores <small>Registro</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-solid">
    
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form action="<?php echo base_url();?>ingresos/proveedores/store" method="POST" enctype="multipart/form-data">
                        <?php if ($this->session->flashdata("success")): ?>
                            <script>
                                swal("Registro Exitoso!", "Haz click en el botón para continuar registrando.", "success");
                            </script>
                        <?php endif ?>
                        <?php if ($this->session->flashdata("error")): ?>
                            <script>
                                swal("Error al Registrar!", "Haz click en el botón para volver intentarlo.", "error");
                            </script>
                        <?php endif ?>
                        <div class="form-group">
                            <label for="">NIT:</label>
                            <input type="text" name="nit" class="form-control" required="required" value="<?php echo set_value('nit'); ?>">
                            <?php echo form_error('nit', '<span class="help-block errorValidation">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" required="required" value="<?php echo set_value('nombre'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Dirección:</label>
                            <input type="text" name="direccion" class="form-control" required="required" value="<?php echo set_value('direccion'); ?>">
                        </div >
                        <div class="form-group">
                            <label for="">Telefono:</label>
                            <input type="text" name="telefono" class="form-control" value="<?php echo set_value('telefono'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Correo:</label>
                            <input type="text" name="correo" class="form-control" value="<?php echo set_value('correo'); ?>">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="guardar" class="btn btn-success btn-flat" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->