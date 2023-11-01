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
    $fecha_nac = trim(strtoupper($_POST['fecha_nac']));
    $email     = trim(strtolower($_POST['email']));
    $direccion = trim(strtoupper($_POST['direccion']));
    $dni       = trim(strtoupper($_POST['dni']));
    $nivel     = trim(strtoupper($_POST['nivel']));
    $passwd1   = trim(strtolower($_POST['passwd1']));

    $archivo = $_FILES['foto']['name'];
    if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo   = $_FILES['foto']['type'];
      $tamano = $_FILES['foto']['size'];
      $temp   = $_FILES['foto']['tmp_name'];
      $rutadesrino = 'public/img/'.$archivo;
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000)))
      {
        $res= "<b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>";
        $res .= "- Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>";
      }else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor

        if (move_uploaded_file($temp, $rutadesrino)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod($rutadesrino, 0777);

            $res = $this->model->Nuevo($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$direccion,$dni,$rutadesrino,$nivel,$passwd1);
        }else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo "Error al subir la imagen";
        }
      }
    }else{
      $foto = "/public/img/avatar.png";
      $res = $this->model->Nuevo($nombre,$apellidos,$sexo,$telefono,$fecha_nac,$email,$direccion,$dni,$foto,$nivel,$passwd1);
    }

    #$this->view->mensaje = $res;
    header("location: ".constant('URL')."listado");
    $this->view->Render('personal/index');
  }

  function render()
  {
    $this->view->Render('personal/index');
  }
}
