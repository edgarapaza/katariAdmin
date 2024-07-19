<?php
require "models/blogs.php";

class BlogModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  function Create($titulo,$descripcion,$contenido,$rutadesrino,$idproyecto)
  {
    $idpersonal = $_SESSION['katari'];
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO blog VALUES (null,'$titulo','$descripcion','$contenido','$rutadesrino','$idproyecto','$idpersonal','$fecCreate','$fecCreate');";

    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }

  function Listado()
  {
    $items = [];
    $sql = "SELECT idblog,titulo,descripcion,contenido,imagen,idpersonal,fecCreate FROM blog;";
    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $item = new Blogs();
      $item->idblog      = $row['idblog'];
      $item->titulo      = $row['titulo'];
      $item->descripcion = $row['descripcion'];
      $item->contenido   = $row['contenido'];
      $item->imagen      = $row['imagen'];
      $item->fecCreate   = $row['fecCreate'];

      array_push($items, $item);
    }
    return $items;
  }

}
