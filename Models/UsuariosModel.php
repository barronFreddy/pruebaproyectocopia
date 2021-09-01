<?php
class UsuariosModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }
    //public function getUsuario()
    //{
    //    $sql = "SELECT * FROM usuarios WHERE 1";
    //    $data = $this->select($sql);
    //    return $data;
    //}
    public function getUsuario(string $usuario, string $password)
    {
        $sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario' AND password = '$password'";
        $data = $this->select($sql);
        return $data;
    }
    public function getUsuarios()
    {
        $sql = "SELECT u.*, c.idCaja, c.nombreCaja FROM usuarios u INNER JOIN cajas c WHERE u.idCaja = c.idCaja";
        $data = $this->selectAll($sql);
        return $data;
    }
}
?>