<div class="row flex justify-content-center">
    <div class="col-lg-4">
        <form action="index.php?controller=Especialidad&action=update" method="POST">
    
            <h2>Editar Especialidad</h2>
            <hr />
            <input type="hidden" class="form-control" id="txtCodigo2" name="txtCodigo2" placeholder="" value="<?php echo $especialidadActual->nombre?>">
            <div class="form-group">
                <label for="txtNombre">Nombre: </label>
                <input type="text" class="form-control" id="txtNombre2" name="txtNombre2" placeholder="" value="<?php echo $especialidadActual->nombre ?>">
            </div>
            <div class="form-group">
                <label for="txtDescripcion">Descripcion: </label>
                <input type="text" class="form-control" id="txtDescripcion2" name="txtDescripcion2" placeholder="" value="<?php echo $especialidadActual->descripcion ?>">
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-success mt-1 mb-5">Actualizar</button>

            </div>
        </form>
    </div>
</div>