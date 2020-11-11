<?php

  session_start();
  //se não existir ou esse valorr for diferente força o redirecionamento
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }

?>