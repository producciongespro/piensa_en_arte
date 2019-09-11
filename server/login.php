<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])== 'xmlhttprequest'    ) {
  require('conectar.php');
  $mysqli = conectarDB();
  sleep(2);
  //creaciòn de la sesiòn:
  session_start();

  // Especifica que tipo de carcateres va a escapar
  $mysqli->set_charset('utf8');

  //real escape es para filtrar los carcateres que van a etrar a la consulta SQL para evita SQL inyection

  $usuario = $mysqli->real_escape_string( $_POST['email']);
  $pas = $mysqli->real_escape_string( $_POST['password']);
  if ($nueva_consulta = $mysqli->prepare("Select nombre, correo, password From usuarios Where correo = ?")) {
      $nueva_consulta->bind_param('s', $usuario);
      $nueva_consulta->execute();
      $resultado = $nueva_consulta->get_result();
      if ($resultado->num_rows == 1) {
          $datos = $resultado->fetch_assoc();
           $encriptado_db = $datos['password'];
          if (password_verify($pas, $encriptado_db))
          {
             $_SESSION['usuario'] = $datos['correo'];
            echo json_encode(array('error'=>false,'correo'=>$datos['correo'], 'nombre'=>$datos['nombre']) );
          }
             else {
                  echo json_encode(array('error'=>true));
                  }
      }
      else {
            echo json_encode(array('error'=>true));
      }
      $nueva_consulta->close();
    }
}
$mysqli->close();
?>
