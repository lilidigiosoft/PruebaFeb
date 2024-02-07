<?php
require_one("modelo/index.php");

class modeloController{
  private $model;

  //
  public function __construct(){
    $this-> model = new Modelo();
  }

  //MOSTRAR REGISTRO
  static function index(){
    $clientes = new Modelo();
    $dato     = $clientes-> mostrar("clientes", "1");
    require_once("vista/index.php");
  }

  //INGRESAR DATA
  static function nuevo(){
    $nombre = $_REQUEST['nombre'];
    $rfc = $_REQUEST['rfc'];
    $domicilio = $_REQUEST['domicilio'];
    $data = "".$nombre.",".$rfc.",".$domicilio;
    $producto = new Modelo();
    $dato = $producto->insertar("clientes",$data);
  }
}