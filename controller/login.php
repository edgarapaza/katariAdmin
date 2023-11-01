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
    $user = trim(strtolower($_POST['email']));
    $passw = trim(strtolower($_POST['password']));

    $res = $this->model->Validar(['user' => $user, 'passw' => $passw]);
    #idpersonal,nivusu,chkusu


    if ($res) {
      #$msg = "Validado correctamente";

      if ($res['chkusu']) {
        switch ($res['nivusu']) {
          case 1:
            $_SESSION['katari'] = $res['idpersonal'];
            $persona = $this->model->NombrePersonal($res['idpersonal']);
            $_SESSION['nombre'] = $persona['personal'];
            $_SESSION['foto'] = $persona['foto'];
            header('location: ' . constant('URL') . 'dashboard');
            break;
          case 2:
            $_SESSION['katari'] = $res['idpersonal'];
            $persona = $this->model->NombrePersonal($res['idpersonal']);
            $_SESSION['nombre'] = $persona['personal'];
            $_SESSION['foto'] = $persona['foto'];
            header('location: ' . constant('URL') . 'main');
            break;
          default:
            echo "Es necesario loguearse";
            break;
        }

      } else {
        $msg = "Usuario NO ACTIVO";
      }
    } else {
      $msg = "Usuario no reconocido";
    }
    echo $msg;
    $this->view->mensaje = $msg;
    $this->view->Render('login/index');
  }

  function render()
  {
    $this->view->Render('login/index');
  }
}
