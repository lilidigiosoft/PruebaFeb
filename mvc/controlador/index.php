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
    $dato     = $producto-> mostrar("productos", "1");//Extraer datos
    require_once("vista/index.php");
  }

  //NUEVO
  static function nuevo(){
    $nombre = $_REQUEST['nombre'];
    $nombre = $_REQUEST['RFC'];
    $nombre = $_REQUEST['domicilio'];
    $data = "".$nombre.",".$rfc.",".$domicilio;
    $producto = new Modelo();
    $dato = $producto->insertar("productos",$data);
  }
}