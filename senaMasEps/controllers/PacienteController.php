<?php

class PacienteController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        //Creamos el objeto usuario
        $paciente_obj = new Paciente();

        //Conseguimos todos los pacientes
        $allPacientes = $paciente_obj->getAll();

        $current_view = 'paciente/main-paciente.php';
        require_once 'views/layouts/' . $this->layout;

    }

    public function create()
    {


        if (isset($_POST["txtNombre"])) {

            $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
            $documento = isset($_POST['txtDocumento']) ? $_POST['txtDocumento'] : "";
            $fecha_nac = isset($_POST['txtFechaNacimiento']) ? $_POST['txtFechaNacimiento'] : "";
            $direccion = isset($_POST['txtDireccion']) ? $_POST['txtDireccion'] : "";
            $telefono = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : "";
            $estado = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : "";
            $genero = isset($_POST['txtGenero']) ? $_POST['txtGenero'] : "";
            $eps = isset($_POST['txtEps']) ? $_POST['txtEps'] : "";
            $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
            $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "";

            // Crear Objeto Paciente con los datos del formulario
            $paciente_obj = new Paciente(
                $documento,
                $nombre,
                $direccion,
                $telefono,
                $fecha_nac,
                $estado,
                $genero,
                $eps,
                $email,
                $password
            );
            // Se llama al metodo que inserta en la base de datos.
            $paciente_obj->save();
        }

        header("Location:index.php?controller=Paciente&action=index");
    }

    public function borrar()
    {
        $documento = isset($_GET['documento']) ? $_GET['documento'] : "";

        $paciente_obj = new Paciente(
            $documento
        );

        $paciente_obj->delete('documento',$documento);

        header("Location:index.php?controller=Paciente&action=index");
    }

    public function editar(){

        $documento = isset($_GET['documento']) ? $_GET['documento'] : "";

        $paciente_obj2 = new Paciente(
            $documento
        );

        // primer dato es el nombre del campo de la llave primaria - segundo dato es el valor de esa llave primaria 
        $pacienteActual = $paciente_obj2->getItemById('documento',$documento);
        /* print_r($pacienteActual); este imprime el retorno de la funcion getItemById*/

        $current_view = 'paciente/editar.php';
        require_once 'views/layouts/' . $this->layout;
        
        require_once('views/paciente/editar.php');

        // header("Location:index.php?controller=Paciente&action=index");
    }

    public function update(){
        
        $documento = isset($_POST['txtDocumento']) ? $_POST['txtDocumento'] : "";
        $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
        $fecha_nac = isset($_POST['txtFechaNacimiento']) ? $_POST['txtFechaNacimiento'] : "";
        $direccion = isset($_POST['txtDireccion']) ? $_POST['txtDireccion'] : "";
        $telefono = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : "";
        $estado = isset($_POST['txtEstado']) ? $_POST['txtEstado'] : "";
        $genero = isset($_POST['txtGenero']) ? $_POST['txtGenero'] : "";
        $eps = isset($_POST['txtEps']) ? $_POST['txtEps'] : "";
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
        $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : "";

        $paciente_obj2 = new Paciente(
            $documento,
            $nombre,
            $direccion,
            $telefono,
            $fecha_nac,
            $estado,
            $genero,
            $eps,
            $email,
            $password
        );

        $paciente_obj2->editar();
        header("Location:index.php?controller=Paciente&action=index");

    }

    public function visualizar(){
        $documento = isset($_GET['documento']) ? $_GET['documento'] : "";

        $paciente_obj2 = new Paciente($documento);

        // primer dato es el nombre del campo de la llave primaria - segundo dato es el valor de esa llave primaria 
        $pacienteActual = $paciente_obj2->getItemById('documento',$documento);

        $current_view = 'paciente/visualizarPaciente.php';
        require_once 'views/layouts/' . $this->layout;
        require_once('views/paciente/visualizarPaciente.php');
        
    }

    public function hola()
    {
        echo "Hola ADSI día";
    }

    public function sumaNum()
    {
        $num1 = 10;
        $num2 = 5;
        $suma = $num1 + $num2;
        echo "La suma es: " . $suma;
    }

    public function suma()
    {
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;
        $suma = $num1 + $num2;

        echo "La suma por GET es: " . $suma;
    }
}
