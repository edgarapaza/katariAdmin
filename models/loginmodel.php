<?php

class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Validar($datos)
  {
    $sql = "SELECT idpersonal,nivusu,chkusu FROM represa.login WHERE email='" . $datos['user'] . "' and passwd = '" . $datos['passw'] . "';";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }

  public function NombrePersonal($idpersonal)
  {
    $sql = "SELECT CONCAT(nombre,' ',apellidos) AS personal, foto FROM personal WHERE idpersonal = $idpersonal;";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
}
