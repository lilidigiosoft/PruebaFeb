<?php
class Modelo{
  private $Modelo;
  private $db;
  private $datos;

  public function _contruct(){
    $this-> Modelo = array();
    $this-> db = new PDO('mysql:host=localhost;dbname=mvc', "root", "");
  }

  public function insertar($tabla, $data){  
    $consulta ="insert into ".$tabla." values(null,". $data .")";
    $resultado=$this->db->query($consulta);
    if ($resultado){
      return true;
    }else{
      return false;
    }
  }

  public function mostrar($tabla, $condicion){
    $consul ="select * from ".$tabla." where".$condicion.";";
    $resu=$this->db->query($consul);
    while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)){
          $this->datos[]=$filas;
    }
    return $this->datos;
  }

  public function actualizar($tabla, $data, $condicion){
    $consulta= "update ".$tabla." set ".$data." where ".$condicion;
    $resultado= $this->db->query($consulta);
    if($resultado) {
      return true;
    } else {
      return false;
    }
  }
  
    public function eliminar($tabla, $condicion){
      $consul= "update from ".$tabla." set "." where ".$condicion;
      $resu= $this->db->query($consul);
      if($resu) {
        return true;
      } else {
        return false;
      }
    }
    





}