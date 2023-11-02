<?php

class Blog extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function new()
  {

    $titulo      = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $imagen      = $_FILES['imagen']['name'];
    $contenido   = $_POST['contenido'];
    $idproyecto  = 1;

    $imagen = $_FILES['imagen']['name'];

    if (isset($imagen) && $imagen != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo   = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp   = $_FILES['imagen']['tmp_name'];


      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {

        $res = "<b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>";
        $res .= "- Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>";
      } else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        $rutadestino = '/var/www/html/katari/public/images/' . $imagen;

        if (move_uploaded_file($temp, $rutadestino)) {
          //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
          chmod($rutadestino, 0777);

          $res = $this->model->Create($titulo, $descripcion, $contenido, $rutadestino, $idproyecto);

          if ($res) {
            $msg = "Guardado Exitosamente";
          } else {
            $msg = "Error al Guardar";
          }
        } else {
          //Si no se ha podido subir la imagen, mostramos un mensaje de error
          $msg = "Error al subir la imagen";
        }
      }
    } else {
      $msg = "Error no ha seleccionado imagen";
    }


    $this->view->mensaje = $msg;
    $this->view->Render('blog/index');
  }

  function render()
  {
    $res = $this->model->Listado();
    $this->view->datos = $res;
    $this->view->Render('blog/listado');
  }
}
