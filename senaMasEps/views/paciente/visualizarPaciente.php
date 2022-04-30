<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-10">
            <div>
                <h2>Pacientes</h2>
                <hr />
            </div>

            <div class="bd-example" id="tabla" class="">
                <table class="table table-success table-striped table-hover justify-content-center align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Documento</th>
                            <th scope="col" class="text-center">Nombre</th>
                            <th scope="col" class="text-center">Direccion</th>
                            <th scope="col" class="text-center">Telefono</th>
                            <th scope="col" class="text-center">Fecha nacimiento</th>
                            <th scope="col" class="text-center">Estado</th>
                            <th scope="col" class="text-center">Genero</th>
                            <th scope="col" class="text-center">Eps</th>
                            <th scope="col" class="text-center">Email</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //recorremos el array de objetos y obtenemos el valor de las propiedades
                        ?>
                                <tr>

                                    <td><?php echo $pacienteActual->documento; ?></td>
                                    <td><?php echo $pacienteActual->nombre; ?></td>
                                    <td><?php echo $pacienteActual->direccion; ?></td>
                                    <td><?php echo $pacienteActual->telefono; ?></td>
                                    <td><?php echo $pacienteActual->fecha_ncto; ?></td>
                                    <td><?php echo $pacienteActual->estado; ?></td>
                                    <td><?php echo $pacienteActual->genero; ?></td>
                                    <td><?php echo $pacienteActual->eps; ?></td>
                                    <td><?php echo $pacienteActual->email; ?></td>
                                    

                                </tr>
                        <?php
                            
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>