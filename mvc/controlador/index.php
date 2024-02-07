<?php
require_one("modelo/index.php");

class modeloController{
  private $model;

  public function __construct(){
    $this-> model = new Modelo();//conexión a la base de datos
  }

  //Mostrar
  static function index(){
    $producto = new Modelo();
    $dato     = $producto-> mostrar("clientes", "1");//Extraer datos de mi tabla
    require_once("vista/index.php");
  }

  //INGRESAR DATA
  static function nuevo(){
    $nombre = $_REQUEST['nombre'];
    $rfc = $_REQUEST['RFC'];
    $domicilio = $_REQUEST['domicilio'];
    $data = "".$nombre.",".$rfc.",".$domicilio;
    $producto = new Modelo();
    $dato = $producto->insertar("clientes",$data);
  }
}