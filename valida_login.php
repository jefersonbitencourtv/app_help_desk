<?
session_start();

//Variavel para verificar se a autenticação foi realizada
$usuario_autenticado = false;

//Usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
);

foreach($usuarios_app as $user){
	//Teste para comparar usuario recebido atraves do post com usuarios do sistema
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

    if($usuario_autenticado){
        echo 'Usuário autenticado.';

          $_SESSION['autenticado'] = 'SIM';
          header('Location: home.php');
    }else{  
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
      }

?>