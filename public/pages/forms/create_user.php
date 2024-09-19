<?php
require("/home/miguel/cursos/php/pratical/arch/bootstrap.php");
if (isEmpty()) {
  flash('message', 'Preencha todos os campos');

  redirect("contato");
}
$validate = validate([
  'nome' => 's',
  'sobrenome' => 's',
  'email' => 'e',
  'password' => 's'
]);

$cadastro = create('users', $validate);
if($cadastro){
  flash('message', 'Usuário cadastrado com sucesso!!', 'success');
  return redirect("create_user");
}else{
  flash('message', 'Erro ao cadastrar');
  return redirect("create_user");
}
