<?php
class Especialidad extends BaseModel
{
    private $codigo;
    private $nombre;
    private $descripcion;

    public function __construct($cod = null,$nom = null,$desc = null){
        $this->table = "especialidad"; // tabla asociada en la base de datos
        $this->codigo = $cod;
        $this->nombre = $nom;
        $this->descripcion = $desc;
        parent::__construct();
    }
    /**
     * Get the value of documento
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Set the value of documento
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set the value of nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * Set the value of descripcion
     *
     * @return self*/
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function save()
    {
        // Preparar la consulta para insertar un Especialidad en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO especialidad (codigo, nombre, descripcion) VALUES (?, ?, ?)");

        $codigo = $this->getCodigo();
        $nombre = $this->getNombre();
        $descripcion = $this->getDescripcion();

        $sql->bindParam(1, $codigo);
        $sql->bindParam(2, $nombre);
        $sql->bindParam(3, $descripcion);

        // Excecute
        $sql->execute();
    }

    /* public function borrar()
    {
        $sql = $this->dbConnection->prepare("DELETE FROM especialidad WHERE codigo = ?");
        $sql->bindParam(1, $this->codigo);
        $sql->execute();
    } */

    public function editar()
    {
        $sql = $this->dbConnection->prepare("UPDATE especialidad SET nombre =?, descripcion=? WHERE codigo = ?");

        $nombre = $this->getNombre();
        $descripcion = $this->getDescripcion();
        $codigo = $this->getCodigo();


        $sql->bindParam(1, $nombre);
        $sql->bindParam(2, $descripcion);
        $sql->bindParam(3, $codigo);

        $sql->execute();
    }
}
