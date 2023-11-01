<?php

class Personal extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  function create()
  {
    #"Crear nuevo";
    $nombre    = trim(strtoupper($_POST['nombre']));
    $apellidos = trim(strtoupper($_POST['apellidos']));
    $sexo      = trim(strtoupper($_POST['sexo']));
    $telefono  = trim(strtoupper($_POST['telefono']));
    $fechanac  = trim(strtoupper($_POST['fechanac']));
    $nivel     = trim(strtoupper($_POST['nivel']));
    $direccion = trim(strtoupper($_POST['direccion']));
    $email     = trim(strtolower($_POST['email']));
    $username  = trim(strtolower($_POST['username']));
    $passwd1   = trim(strtolower($_POST['passwd1']));

    $archivo = $_FILES['foto']['name'];
    if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo   = $_FILES['foto']['type'];
      $tamano = $_FILES['foto']['size'];
      $temp   = $_FILES['foto']['tmp_name'];
      $rutadestino = 'public/img/' . $archivo;

      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {

        $res = "<b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>";
        $res .= "- Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>";

      } else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor

        if (move_uploaded_file($temp, $rutadestino)) {
          //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
          chmod($rutadesrino, 0777);

          $res = $this->model->Nuevo($nombre, $apellidos, $sexo, $telefono, $fechanac, $email, $username, $direccion, $dni, $rutadestino, $nivel, $passwd1);
        } else {
          //Si no se ha podido subir la imagen, mostramos un mensaje de error
          echo "Error al subir la imagen";
        }
      }
    } else {
      #echo "si imagen";
      $rutadestino = "public/img/avatar.png";
      $res = $this->model->Nuevo($nombre, $apellidos, $sexo, $telefono, $fechanac, $email,$username, $direccion, $dni, $rutadestino, $nivel, $passwd1);
    }

    #$this->view->mensaje = $res;

    $this->view->Render('personal/index');
  }

  function render()
  {
    $this->view->Render('personal/index');
  }
}
