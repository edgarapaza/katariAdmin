<?php

class Login extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  function user()
  {
    #echo "Recibiendo datos de Login<br>";
    $user = trim(strtolower($_POST['username']));
    $passw = trim(strtolower($_POST['passwd']));

    $res = $this->model->Validar($user, $passw);

    #idpersonal,nivusu,chkusu

    if ($res) {
      #$msg = "Validado correctamente";

      if ($res['chkusu']) {
        if ($res['nivusu'] == 1) {
          $_SESSION['katari'] = $res['idpersonal'];
          $persona = $this->model->NombrePersonal($res['idpersonal']);
          $_SESSION['nombre'] = $persona['personal'];
          $_SESSION['foto'] = $persona['foto'];
          header('location: ' . constant('URL') . 'dashboard');
        }
      } else {
        $msg = "Usuario NO ACTIVO";
      }
    } else {
      $msg = "Usuario no reconocido";
    }

    $this->view->mensaje = $msg;
    $this->view->Render('login/index');
  }

  function render()
  {
    $this->view->Render('login/index');
  }
}
