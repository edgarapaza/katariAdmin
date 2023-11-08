<?php

class Productos extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function insertar()
  {
    $idcategoria = $_POST['idcategoria'];
    $nombre = $_POST['nombre'];
    $caracteristicas = $_POST['caracteristicas'];
    $preciototal = $_POST['preciototal'];
    $porcentaje = $_POST['porcentaje'];
    $preciodsct = $_POST['preciodsto'];
    $ahorro = $_POST['ahorro'];
    $cupon  = 0;
    $cupondsto = 0;

    if (is_null($porcentaje)) {
      $porcentaje = 0;
    }



    $imagen = $_FILES['imagen']['name'];

    if (isset($imagen) && $imagen != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo   = $_FILES['imagen']['type'];
      $tamano = $_FILES['imagen']['size'];
      $temp   = $_FILES['imagen']['tmp_name'];

      $rutadestino = 'public/img/' . $imagen;
      $rutadestino2 = '/var/www/html/katari/public/img/' . $imagen;

      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
        $msg = "<b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>";
        $msg .= "- Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>";
      } else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor

        if (move_uploaded_file($temp, $rutadestino2)) {
          //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
          chmod($rutadestino2, 0777);

          $this->model->Insertar($idcategoria, $rutadestino, $nombre, $caracteristicas, $preciototal, $porcentaje, $preciodsct, $ahorro, $cupon, $cupondsto);

          $msg = "<b>Imagen subida CORRECTAMENTE</b>";
        } else {
          //Si no se ha podido subir la imagen, mostramos un mensaje de error
          $msg = "<b>Error al subir la imagen</b>";
        }
      }
    } else {
      $msg = "<b>Debe seleccionar una imagen.</b>";
    }

    $this->view->mensaje = $msg;
    $this->view->Render('dashboard/index');
  }

  function render()
  {
    $result = $this->model->Categorias();
    $this->view->datos = $result;
    $this->view->Render('productos/index');
  }
}
