<?php

class ErrorGeneral extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->mensaje = "Pagina en Construcción o no fue creada.";
    $this->view->Render('error/index');
  }
}
