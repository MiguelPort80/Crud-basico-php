<h1>Home</h1>

<a href="?page=create_user" class="btn btn-primary"> Cadastrar Usuário </a>
<h2>Lista de Usuários</h2>

<?=getFlash('message')?>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Nome</th>
			<th scope="col">Sobrenome</th>
			<th scope="col">Email</th>
		</tr>
	</thead>
  <?php $users = readAll('users');
  foreach ($users as $user) {
?>
	<tbody>
		<tr>
    <td><?=$user->id?></td>
    <td><?=$user->nome?></td>
    <td><?=$user->sobrenome?></td>
    <td><?=$user->email?></td>
    <td> <a href="?page=edit_user&id=<?=$user->id?>" class="btn btn-success">Editar</a></td>
    <td> <a href="?page=delete_user&id=<?=$user->id?>" class="btn btn-danger">Deletar</a></td>
		</tr>
<?php }
?>
	</tbody>
</table>
