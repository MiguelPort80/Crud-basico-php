<?php
require("/home/miguel/cursos/php/pratical/arch/bootstrap.php");
$id = $_POST['id'];
$id = (int)$id;
if (isEmpty()) {

  redirect("edit_user&id=". $id);
}
$validate = validate([
  'nome' => 's',
  'sobrenome' => 's',
  'email' => 'e',
]);
var_dump($validate);
$atualizar = update('users', $validate, ['id', $id]);
var_dump($atualizar);
if($atualizar){
  flash('message', 'Usuário atualizado com sucesso!!', 'success');
  return redirect("edit_user&id=" . $id);
}else{
  flash('message', 'Erro ao atualizar');
  return redirect("edit_user&id=" . $id);
}
