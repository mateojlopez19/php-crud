
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form action="<?php echo "index.php?controller=Paciente&action=create"; ?>" method="post">
                <h2>Añadir Paciente</h2>
                <hr />
                <div class="form-group">
                    <label for="txtDocumento">Documento: </label>
                    <input type="text" class="form-control" id="txtDocumento" name="txtDocumento" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre: </label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="txtFechaNacimiento">Fecha Nacimiento: </label>
                    <input type="date" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="txtDireccion">Dirección: </label>
                    <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="txtTelefono">Telefono: </label>
                    <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="txtGenero">Genero: </label>
                    <select class="form-control" id="txtGenero" name="txtGenero" required>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtEstado">Estado: </label>
                    <select class="form-control" id="txtEstado" name="txtEstado" required>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                        <option value="multado">Con multa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtEps">EPS: </label>
                    <input type="text" class="form-control" id="txtEps" name="txtEps" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="txtEmail">Email: </label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="txtPassword">Contraseña: </label>
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success mt-4 mb-5">Guardar</button>
                </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div>
                <h2>Pacientes</h2>
                <hr />
            </div>

            <div class="bd-example" id="tabla">
                <table class="table table-dark table-striped table-hover justify-content-center align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Documento</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Eps</th>
                            <th scope="col" class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($allPacientes)) {
                            foreach ($allPacientes as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                                <tr>

                                    <td><?php echo $row->documento ?></td>
                                    <td><?php echo $row->nombre; ?></td>
                                    <td><?php echo $row->direccion; ?></td>
                                    <td><?php echo $row->eps; ?></td>
                                    <td class="text-center">
                                        <!-- echo"index.php?controller=Paciente&action=editar&documento="  esto es pa cuando se quiera guardar el editado-->
                                        <a href="<?php echo "index.php?controller=paciente&action=editar&documento=" . $row->documento; ?>" class="btn btn-warning">Editar</a>
                                        <a href="<?php echo "index.php?controller=Paciente&action=borrar&documento=" . $row->documento; ?>" class="btn btn-danger">Borrar</a>
                                        <a href="<?php echo "index.php?controller=Paciente&action=visualizar&documento=" . $row->documento; ?>" class="btn btn-success">Visualizar</a>

                                    </td>

                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>