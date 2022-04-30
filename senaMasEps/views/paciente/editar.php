<div class="row flex justify-content-center">
    <div class="col-lg-4 ">
        <form action="<?php echo "index.php?controller=Paciente&action=update"; ?>" method="post">
            <h2>Editar Paciente</h2>
            <hr />

            <input type="hidden" class="form-control" id="txtDocumento" name="txtDocumento" placeholder="" value="<?php echo $pacienteActual->documento ?>">

            <div class="form-group">
                <label for="txtNombre">Nombre: </label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="" value="<?php echo $pacienteActual->nombre ?>">
            </div>
            <div class="form-group">
                <label for="txtDireccion">Dirección: </label>
                <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="" value="<?php echo $pacienteActual->direccion ?>">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Telefono: </label>
                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="" value="<?php echo $pacienteActual->telefono ?>">
            </div>
            <div class="form-group">
                <label for="txtFechaNacimiento">Fecha Nacimiento: </label>
                <input type="date" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento" placeholder="" value="<?php echo $pacienteActual->fecha_nac ?>">
            </div>
            <div class="form-group">
                <label for="txtEstado">Estado: </label>
                <select class="form-control" id="txtEstado" name="txtEstado">
                    <option value="activo" <?php if ($pacienteActual->estado == 'activo') echo 'selected' ?>>Activo</option>
                    <option value="inactivo" <?php if ($pacienteActual->estado == 'inactivo') echo 'selected' ?>>Inactivo</option>
                    <option value="multado" <?php if ($pacienteActual->estado == 'multado') echo 'selected' ?>>Con multa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="txtGenero">Genero: </label>
                <select class="form-control" id="txtGenero" name="txtGenero">
                    <option value="M" <?php if ($pacienteActual->genero == 'M') echo 'selected' ?>>Masculino</option>
                    <option value="F" <?php if ($pacienteActual->genero == 'F') echo 'selected' ?>>Femenino</option>
                </select>
            </div>

            <div class="form-group">
                <label for="txtEps">EPS: </label>
                <input type="text" class="form-control" id="txtEps" name="txtEps" placeholder="" value="<?php echo $pacienteActual->eps ?>">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email: </label>
                <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="" value="<?php echo $pacienteActual->email ?>">
            </div>
            <div class="form-group">
                <label for="txtPassword">Contraseña: </label>
                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="" value="<?php echo $pacienteActual->contrasena ?>">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success mt-4 mb-5">Actualizar informacion</button>
            </div>
        </form>
    </div>
</div>