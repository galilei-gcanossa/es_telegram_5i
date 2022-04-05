<?php
  $json = file_get_contents('php://input');
  
  file_put_contents("hook.log", $json, FILE_APPEND);

  $request = json_decode($json, true);

  
?>