<?php
include_once("models/categorias.php");

class ProductosModel extends Model
{
  function __construct()
  {

    parent::__construct();
  }

  public function Insertar($idcategoria, $imagen, $nombre, $caracteristicas, $preciototal, $preciodsct, $ahorro, $cupon, $cupondsto)
  {
    $fecCreate = date("Y-m-d H:i:s");
    $sql = "INSERT INTO productos VALUES (NULL,'$idcategoria','$imagen','$nombre','$caracteristicas','$preciototal','$preciodsct','$ahorro','$cupon','$cupondsto','$fecCreate');";
    $data = $this->conn->ConsultaSin($sql);
    return $data;
  }

  public function Categorias()
  {
    $items = [];
    $sql = "SELECT idcategoria,nombre FROM categoria;";
    $data = $this->conn->ConsultaCon($sql);

    while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
      $item = new Categorias();
      $item->idcategoria = $row['idcategoria'];
      $item->categoria   = $row['nombre'];

      array_push($items, $item);
    }
    return $items;
  }
}
