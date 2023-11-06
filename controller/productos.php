<?php

class Productos extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $result = $this->model->Categorias();
    $this->view->datos = $result;
    $this->view->Render('productos/index');
  }
}
