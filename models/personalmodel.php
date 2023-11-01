<?php

class PersonalModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Nuevo($nombre, $apellidos, $sexo, $telefono, $fechanac, $email, $username, $direccion, $dni, $rutadestino, $nivel, $passwd1)
  {
    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO personal VALUES (null,'$nombre','$apellidos','$sexo','$telefono','$fechanac','$email','$direccion','$dni','$rutadestino','$fecCreate','$fecCreate');";
    $this->conn->ConsultaSin($sql);

    $sql_last = "SELECT MAX(idpersonal) AS idper FROM personal ORDER BY idpersonal DESC LIMIT 1;";
    $ultimo = $this->conn->ConsultaArray($sql_last);

    $sql3 = "INSERT INTO katari.login VALUES (NULL,'" . $ultimo['idper'] . "','$username',md5('$passwd1'),'$nivel',1);";
    $this->conn->ConsultaSin($sql3);
  }
}
