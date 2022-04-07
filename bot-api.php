<?php
  require_once('fetch-api.php');

  class TelegramBot {

    protected $botId;

    function __construct($botId){
      $this->botId = $botId;
    }

    private function  _getApiMethodUrl($methodName){
      return "https://api.telegram.org/bot$this->botId/$methodName";
    }

    public function getMe(){
      return json_decode(fetch($this->_getApiMethodUrl("getMe"), 'POST'));
    }

    public function getUpdates(){
      return json_decode(fetch($this->_getApiMethodUrl("getUpdates"), 'POST'));
    }

    public function setWebhook($url){
      return json_decode(fetch($this->_getApiMethodUrl("setWebhook"), 'POST', array(
        "url"=>$url
      )));
    }

    public function deleteWebhook(){
      return json_decode(fetch($this->_getApiMethodUrl("deleteWebhook"), 'POST'));
    }
  }

?>