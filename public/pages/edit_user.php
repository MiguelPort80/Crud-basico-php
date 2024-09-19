<h1>Editar Usuário</h1>
<br>
<?= getFlash('message')?>
<?php
 $user = find('users','id',$_GET['id']);
?>
<form action="/pages/forms/update_user.php" method="POST" role="form">
  <div class="form-group">
    <label>Nome: </label>
    <input type="text" class="form-control" name="nome" value="<?=$user->nome?>">
  </div>
  <div class="form-group">
    <label>Sobrenome: </label>
    <input type="text" class="form-control" name="sobrenome" value="<?=$user->sobrenome?>">
  </div>
  <div class="form-group">
    <label>Email: </label>
    <input type="text" class="form-control" name="email" value="<?=$user->email?>">
  </div>
  <div class="form-group">
  <input type="hidden" value="<?=$user->id?>"name="id">
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
</form> 
