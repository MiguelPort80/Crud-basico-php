<?php
function dumpDie($dump)
{
  var_dump($dump);
  die();
}

function request()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    return $_POST;
  }
  return $_GET;
}

function isEmpty()
{
  $request = request();
  $isEmpty = false;

  foreach ($request as $key => $value) {
    if(empty($request[$key])){
      return true;
    }
  }
  return false;
}


function redirect($target)
{
 return header("location:/?page={$target}");
}


function redirectToHome()
{
 return header("location:/?page=home");
}
