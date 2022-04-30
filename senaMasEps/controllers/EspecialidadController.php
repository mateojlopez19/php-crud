<?php

class EspecialidadController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Creamos el objeto usuario
        $especialidad_obj2 = new Especialidad();

        //Conseguimos todos los pacientes
        $allEspecialidades = $especialidad_obj2->getAll();
  
        //vista actual
        $current_view = 'especialidad/main-especialidad.php';
        require_once 'views/layouts/' . $this->layout;

    }
 
    public function create()
    {


        if (isset($_POST["txtNombre"])) {
            $codigo = isset($_POST['txtCodigo']) ? $_POST['txtCodigo'] : "";
            $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : "";
            $descripcion = isset($_POST['txtDescripcion']) ? $_POST['txtDescripcion'] : "";

            // Crear Objeto Especialidad con los datos del formulario
            $especialidad_obj2 = new Especialidad( $codigo, $nombre, $descripcion );
            // Se llama al metodo que inserta en la base de datos.
            $especialidad_obj2->save();
        }

        header("Location:index.php?controller=Especialidad&action=index");
    }

    public function borrar()
    {

        $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";

        $especialidad_obj2 = new Especialidad($codigo);

        $especialidad_obj2->delete('codigo', $codigo);

        header("Location:index.php?controller=Especialidad&action=index");
    }

    public function editar(){

        $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";

        $especialidad_obj2 = new Especialidad($codigo);

        // primer dato es el nombre del campo de la llave primaria - segundo dato es el valor de esa llave primaria 
        $especialidadActual = $especialidad_obj2->getItemById('codigo',$codigo);
        /* print_r($especialidadActual); */


        $current_view = 'especialidad/editar2.php';
        require_once 'views/layouts/' . $this->layout;
        require_once('views/especialidad/editar2.php');
    }

    public function update(){
        
        $codigo = isset($_POST['txtCodigo2']) ? $_POST['txtCodigo2'] : "";
        $nombre = isset($_POST['txtNombre2']) ? $_POST['txtNombre2'] : "";
        $descripcion = isset($_POST['txtDescripcion2']) ? $_POST['txtDescripcion2'] : "";

        // Crear Objeto Especialidad con los datos del formulario
        $especialidad_obj2 = new Especialidad( $codigo, $nombre, $descripcion);

        $especialidad_obj2->editar();
        header("Location:index.php?controller=Especialidad&action=index");
    }

    public function visualizar(){

        $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";

        $especialidad_obj2 = new Especialidad($codigo);

        // primer dato es el nombre del campo de la llave primaria - segundo dato es el valor de esa llave primaria 
        $especialidadActual = $especialidad_obj2->getItemById('codigo', $codigo);

        
        $current_view = 'especialidad/visualizarEspecialidad.php';
        require_once 'views/layouts/' . $this->layout;
        require_once('views/especialidad/visualizarEspecialidad.php');
    }
}
