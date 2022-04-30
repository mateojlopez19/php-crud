<?php
class BaseController
{
    public function __construct()
    {
        $this->layout = "admin_layout.php";

        require_once 'Connection.php';
        require_once 'BaseModel.php';

        //Incluir todos los modelos
        /*foreach (glob("models/*.php") as $file) {
        require_once $file;
        }*/

        require_once 'models/Paciente.class.php';
        require_once 'models/Especialidad.class.php';
    }
    // Crear los Métodos que sean comunes para todos los controladores
}