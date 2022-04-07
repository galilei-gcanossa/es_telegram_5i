<?php
  //gmdate("Y-m-d\TH:i:s\Z", $timestamp);
  require_once('config.php');
  require_once('bot-api.php');

  try{
    $bot = new TelegramBot($BOT_ID);
    
    var_dump($bot->getMe());

    // var_dump($bot->setWebhook("https://b6df-5-90-106-98.ngrok.io/json_handler.php"));

    $bot->deleteWebhook();
  }
  catch(ErrorException $e){
    echo $e->getMessage();
  }

?>