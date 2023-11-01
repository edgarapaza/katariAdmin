<?php
require "models/personal.php";

class ListadoModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Listado()
  {
    $items = [];
    $sql = "SELECT idpersonal,nombre,apellidos,sexo,telefono,fecha_nac,email,direccion,dni,foto FROM personal;";
    $res = $this->conn->ConsultaCon($sql);

    while ($row = $res->fetch_array(MYSQLI_ASSOC))
    {
      $personal = new Personal();

      $personal->idpersonal = $row['idpersonal'];
      $personal->nombre     = $row['nombre'];
      $personal->apellidos  = $row['apellidos'];
      $personal->sexo       = $row['sexo'];
      $personal->telefono   = $row['telefono'];
      $personal->fecha_nac  = $row['fecha_nac'];
      $personal->email      = $row['email'];
      $personal->direccion  = $row['direccion'];
      $personal->dni        = $row['dni'];
      $personal->foto       = $row['foto'];

      array_push($items, $personal);
    }
    return $items;
  }

  function getById($idpersonal)
  {
    $sql = "SELECT p.idpersonal,p.nombre,p.apellidos,p.sexo,p.telefono,p.fecha_nac,p.email,p.direccion,p.dni,p.foto
      FROM personal AS p WHERE p.idpersonal=".$idpersonal;
    $res = $this->conn->ConsultaArray($sql);

    return $res;
  }

  function update($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$direccion,$dni,$foto,$idpersonal)
  {
    $fecUpdate = date('Y-m-d H:i:s');
    $sql = "UPDATE personal SET nombre = '$nombre',apellidos = '$apellidos',sexo = '$sexo',telefono = '$telefono',fecha_nac = '$fecha_nac',email = '$email',direccion = '$direccion',dni = '$dni',foto = '$foto',fecUpdate = '$fecUpdate' WHERE idpersonal = $idpersonal;";

    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }

  function delete($idpersonal)
  {
    $fecUpdate = date('Y-m-d H:i:s');
    $sql = "DELETE FROM personal WHERE (idpersonal = '$idpersonal') LIMIT 1;";

    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }
}