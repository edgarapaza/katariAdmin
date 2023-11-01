<?php

class Listado extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $data = $this->model->Listado();
    $this->view->datos = $data;
    $this->view->Render('listado/index');
  }

  function VerTrabajador($param = null)
  {
    $idpersonal = $param[0];
    $res = $this->model->getById($idpersonal);

    $this->view->datos = $res;
    $this->view->Render('listado/detalle');
  }

  function Update($param = null)
  {
    $idpersonal = $param[0];

    $nombre    = trim(strtoupper($_POST['nombre']));
    $apellidos = trim(strtoupper($_POST['apellidos']));
    $sexo      = trim(strtoupper($_POST['sexo']));
    $telefono  = trim(strtoupper($_POST['telefono']));
    $fechanac  = trim(strtoupper($_POST['fechanac']));
    $email     = trim(strtolower($_POST['email']));
    $direccion = trim(strtoupper($_POST['direccion']));
    $dni       = trim(strtoupper($_POST['dni']));
    $foto      = trim(strtolower($_POST['foto']));

    if ($this->model->update($nombre, $apellidos, $sexo, $telefono, $fechanac, $email, $direccion, $dni, $foto, $idpersonal)) {
      $personal = new Personal();
      $personal->nombre = $nombre;
      $personal->apellidos = $apellidos;
      $personal->sexo = $sexo;
      $personal->telefono = $telefono;
      $personal->fechanac = $fechanac;
      $personal->email = $email;
      $personal->direccion = $direccion;
      $personal->dni = $dni;
      $personal->foto = $foto;

      $this->view->mensaje = "Actualizado correctamente";
    } else {
      $this->view->mensaje = "Error al actualizar";
    }

    $this->view->Render('listado/detalle');
  }

  function Delete($param = null)
  {
    $idpersonal = $param[0];

    $res = $this->model->delete($idpersonal);

    $this->view->datos = $res;
    $this->view->Render('dashboard/index');
  }
}
