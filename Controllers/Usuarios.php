<?php
class Usuarios extends Controller{

    public function __construct(){
        session_start();
        parent::__construct();
    }
    public function index()
    {              
        $this->views->getView($this, "index");
        //print_r($this->model->getUsuario());
    }
    public function listarUsuario()
    {
        $data = $this->model->getUsuarios();
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
            }else{
                $data[$i]['estado'] = '<span class="badge badge-success">Inactivo</span>';
            }
            $data[$i]['acciones'] = '<di>
            <button class="btn btn-success" type="button"><i class="fas fa-edit"></i></button>
            <button class="btn btn-danger" type="button">eliminar</button>
            </di>';
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
        //print_r($this->model->getUsuarios());
    }
    public function validar()
    {
        if(empty($_POST['usuario']) || empty($_POST['password'])){
            $msg ="los campos estan vacios";
        }else{
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $data = $this->model->getUsuario($usuario, $password);
            if($data){
                $_SESSION['idUsuario'] = $data['idUsuario'];
                $_SESSION['usuario'] = $data['nombreUsuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $msg = "ok";
            }else{
                $msg = "error en usuario o contraseña";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        //print_r($data);
        //print_r($_POST);
        die();
    }
}
?>
