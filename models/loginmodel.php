<?php

class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Validar($user, $password)
  {
    $sql = "SELECT idpersonal,nivusu,chkusu FROM login WHERE username='$user' AND passwd=MD5('$password')";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  public function Validar1($user, $password)
  {
    $sql = "SELECT idpersonal,nivusu,chkusu FROM login WHERE username='$user' AND passwd='$password';";
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
