<?php
  $json = file_get_contents('php://input');
  
  $request = json_decode($json, true);

  
?>