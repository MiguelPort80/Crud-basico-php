<?php
  function validate(array $arr)
  {
    $method = request();
    $validate = [];
    foreach ($arr as $field => $type) {
      switch ($type) {
      case 's':
        $validate[$field] = filter_var($method[$field], FILTER_SANITIZE_STRING);
        break;
      case 'i':
        $validate[$field] = filter_var($method[$field], FILTER_SANITIZE_NUMBER_INT);
        break;
      case 'e':
        $validate[$field] = filter_var($method[$field], FILTER_SANITIZE_EMAIL);
        break;
      
      default:
        echo "KAMEHAMEHAAAAAA";
        break;
      }
    }
    return (object) $validate;
  }
