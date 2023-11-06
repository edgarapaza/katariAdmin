<?php

class Categoria extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->Render('categoria/index');
  }
}
