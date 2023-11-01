<?php

class PersonalModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Nuevo($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$direccion,$dni,$foto,$nivel,$passwd1)
  {
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO personal VALUES (null,'$nombre','$apellidos','$sexo','$telefono','$fecha_nac','$email','$direccion','$dni','$foto','$fecCreate','$fecCreate');";
    $this->conn->ConsultaSin($sql);

    $sql_last = "SELECT MAX(idpersonal) AS idper FROM personal ORDER BY idpersonal DESC LIMIT 1;";
    $ultimo = $this->ConsultaArray($sql_last);

    $sql_login = "INSERT INTO login VALUES (null,'".$ultimo['idper']."','$email','$passwd1','$nivel','1')";
    $this->ConsultaSin($sql_login);
  }
}