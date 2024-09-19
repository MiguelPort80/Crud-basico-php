<?php
require("/home/miguel/cursos/php/pratical/arch/bootstrap.php");
?>
<h1>Contato</h1>
<br>
<?= getFlash('message')?>
<br>
<br>
  <form action="/pages/forms/contato.php" method="POST" role="form">
    <div class="form-group">
      <label>Name: </label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>Email: </label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label>Assunto: </label>
      <input type="text" class="form-control" name="subject">
    </div>
    <div class="form-group">
      <label>Mensagem: </label>
      <textarea name="message" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form> 
