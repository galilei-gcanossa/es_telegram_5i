<?php

  require_once('config.php');
  require_once('bot-api.php');

  try{
    $bot = new TelegramBot($BOT_ID);
    
    var_dump($bot->getMe());
  }
  catch(ErrorException $e){
    echo $e->getMessage();
  }

?>