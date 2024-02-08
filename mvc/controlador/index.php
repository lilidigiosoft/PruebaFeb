<?php
require_one("modelo/index.php");

class modeloController{
  private $model;

  //NUEVO
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
    $data = "nombre=".$nombre.",".$rfc.",".$domicilio;
    $cliente = new Modelo();
    $dato = $cliente->insertar("clientes",$data);
    header("location:".urlsite);
  }
}