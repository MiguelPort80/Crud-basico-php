<?php
require("/home/miguel/cursos/php/pratical/arch/bootstrap.php");
//dumpDie($_POST);
if (isEmpty()) {
  flash('message', 'Preencha todos os campos');

  redirect("contato");
}
$validate = validate([
  'name' => 's',
  'email' => 'e',
  'subject' => 's',
  'message' => 's'
]);

$data = [
  'quem' => $validate->email,
  'para' => 'red70841012@gmail.com',
  'mensagem' => $validate->message,
  'assunto' => $validate->subject
];
if(sendMailer($data)){
  flash('message', 'Email enviado com sucesso', 'success');

  return redirect("contato");
}
