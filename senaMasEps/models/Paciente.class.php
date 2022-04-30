<?php
class Paciente extends BaseModel
{
    private $documento;
    private $nombre;
    private $direccion;
    private $telefono;
    private $fecha_nacimiento;
    private $estado;
    private $genero;
    private $eps;
    private $email;
    private $password;

    public function __construct(
        $doc = null,
        $nom = null,
        $dir = null,
        $tel = null,
        $fec = null,
        $est = null,
        $gen = null,
        $_eps = null,
        $_email = null,
        $_pass = null
    ) {
        $this->table = "paciente"; // tabla asociada en la base de datos
        $this->documento = $doc;
        $this->nombre = $nom;
        $this->direccion = $dir;
        $this->telefono = $tel;
        $this->fecha_nacimiento = $fec;
        $this->estado = $est;
        $this->genero = $gen;
        $this->eps = $_eps;
        $this->email = $_email;
        $this->password = $_pass;
        parent::__construct();
    }
    /**
     * Get the value of documento
     */
    public function getDocumento()
    {
        return $this->documento;
    }
    /**
     * Set the value of documento
     *
     * @return self
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
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
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    /**
     * Set the value of direccion
     *
     * @return self*/
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }
    /**
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /**
     * Set the value of telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }
    /**
     * Get the value of fecha_nacimiento
     */
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    /**
     * Set the value of fecha_nacimiento
     *
     * @return self
     */
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        return $this;
    }
    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }
    /**
     * Set the value of estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }
    /**
     * Set the value of genero
     *
     * @return self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
        return $this;
    }
    /**
     * Get the value of eps
     */
    public function getEps()
    {
        return $this->eps;
    }
    /**
     * Set the value of eps
     *
     * @return self
     */
    public function setEps($eps)
    {
        $this->eps = $eps;
        return $this;
    }
    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set the value of email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set the value of password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function save()
    {
        // Preparar la consulta para insertar un paciente en la BD
        $sql = $this->dbConnection->prepare("INSERT INTO paciente (documento, nombre, direccion,
telefono, fecha_ncto, estado, genero, eps, email, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
        
        $documento = $this->getDocumento();
        $nombre = $this->getNombre();
        $direccion = $this->getDireccion();
        $telefono = $this->getTelefono();
        $fecha_ncto = $this->getFecha_nacimiento();
        $estado = $this->getEstado();
        $genero = $this->getGenero();
        $eps = $this->getEps();
        $email = $this->getEmail();
        $pass = $this->getPassword();

        $sql->bindParam(1, $documento);
        $sql->bindParam(2, $nombre);
        $sql->bindParam(3, $direccion);
        $sql->bindParam(4, $telefono);
        $sql->bindParam(5, $fecha_ncto);
        $sql->bindParam(6, $estado);
        $sql->bindParam(7, $genero);
        $sql->bindParam(8, $eps);
        $sql->bindParam(9, $email);
        $sql->bindParam(10, $pass);
        // Excecute
        $sql->execute();
    }

    /* public function borrar()
    {
        $sql = $this->dbConnection->prepare("DELETE FROM paciente WHERE documento = ?");
        $sql->bindParam(1, $this->documento);
        $sql->execute();
    } */
    
    public function editar()
    {
        $sql = $this->dbConnection->prepare("UPDATE paciente SET nombre =?, fecha_ncto=?, direccion=?, telefono=?, genero=?,
         estado=?, eps=?, email=?, contrasena=? WHERE documento = ?");
        
        $documento = $this->getDocumento();    
        $nombre = $this->getNombre();
        $direccion = $this->getDireccion();
        $telefono = $this->getTelefono();
        $fecha_ncto = $this->getFecha_nacimiento();
        $estado = $this->getEstado();
        $genero = $this->getGenero();
        $eps = $this->getEps();
        $email = $this->getEmail();
        $pass = $this->getPassword();

        $sql->bindParam(1, $nombre);
        $sql->bindParam(2, $fecha_ncto);
        $sql->bindParam(3, $direccion);
        $sql->bindParam(4, $telefono);
        $sql->bindParam(5, $genero);
        $sql->bindParam(6, $estado);
        $sql->bindParam(7, $eps);
        $sql->bindParam(8, $email);
        $sql->bindParam(9, $pass);
        $sql->bindParam(10, $documento);

        $sql->execute();

    }

}
