<?php
session_start();
class Salir extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function end()
  {
    session_destroy();
    echo $_SESSION['katari'] = "";
    echo $_SESSION['nivel'] = "";
    $this->view->Render('login/index');
  }

  function render()
  {
    $this->view->Render('login/index');
  }
}
