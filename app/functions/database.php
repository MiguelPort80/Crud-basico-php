<?php
function connect()
{
  $pdo = new \PDO("mysql:host=localhost;dbname=banco_teste;charset=utf8", 'teste', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  return $pdo;
}

function create($table, $fields)
{
  $pdo = connect();
  if(!is_array($fields)){
    $fields = (array) $fields;
  }

  $sql = "insert into {$table}";
  $sql .= "(" . implode(',',array_keys($fields)) . ")";
  $sql .= " values(" . ":" . implode(',:',array_keys($fields)) . ")";

  $insert = $pdo->prepare($sql);

  return $insert->execute($fields);

}

function readAll($table)
{
  $pdo = connect();
  $sql = "select * from {$table}";
  $list = $pdo->query($sql);
  $list->execute();
  return $list->fetchAll();
}

function find($table,$field,$value)
{
  $pdo = connect();

  $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);

  $sql = "select * from {$table} where {$field} = :{$field}";

  $find = $pdo->prepare($sql);
  $find->bindValue($field, $value);
  $find->execute();

  return $find->fetch();
}

function update($table, $fields, $where){
  if(!is_array($fields)){
    $fields = (array) $fields;
  }

  $pdo = connect();
  $data = array_map(function($field){
    return "{$field} = :{$field}";
  }, array_keys($fields));
  
  $sql = "update {$table} set ";
  $sql .= implode(',',$data);
  $sql .= " where {$where[0]} = :{$where[0]}";
  $data = array_merge($fields, [$where[0] => $where[1]]);


  try {
        $update = $pdo->prepare($sql);
        $update->execute($data);
        return $update->rowCount();
    } catch (PDOException $e) {
        // Exibir erro para depuração
        echo "Erro: " . $e->getMessage();
        return false;
    }
}

function delete($table, $field, $value)
{
  $pdo = connect();
  $sql = "delete from {$table} where {$field} = :{$field}";
  $delete = $pdo->prepare($sql);
  $delete->bindValue($field,$value);
  
  return $delete->execute();
}
