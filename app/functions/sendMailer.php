<?php
function sendMailer(array $data)
{
  $mail = new PHPMailer\PHPMailer\PHPMailer;
  $mail->isSMTP();
  //coloque seu servidor smtp
  $mail->Host = 'sandbox.smtp.mailtrap.io';
  $mail->Port = 587;
  //tipo de segurança
  $mail->SMTPSecure = 'plain';
  $mail->SMTPAuth = true;
  //seu username e sua senha (seu provedor de smtp te disponibiliza esses dados)
  $mail->Username = '70f57f964b4a11';
  $mail->Password = '9e216dc2251fa0';

  //Configurar as contas para as quais você deseja enviar a mensagem
  $mail->setFrom('ndanns22@clk2020.net');
  $mail->Subject = 'Envio de email para testes';

  //Também o que você deseja enviar na mensagem, como HTML, texto e anexos...
  $mail->Charset = 'UTF-8';
  $mail->msgHTML("< p >Mensagem de < b >boas-vindas< /b >!< /p >");
  $mail->AltBody = 'Mensagem de teste, cheque se seu provedor de email tem acesso a html';
  $mail->FromName = $data['quem']; 
  $mail->addAddress($data['para']); 
  $mail->Body = $data['mensagem']; 
  $mail->Subject = $data['assunto']; 

  return $mail->send();
  echo $mail->ErrorInfo;
}
