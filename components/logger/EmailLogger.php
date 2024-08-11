<?php
namespace app\components\logger;

use app\components\logger\LoggerTypeInterface;

class EmailLogger implements LoggerTypeInterface 
{

    private string $receiver;

    public function __construct(array $config) {
        $this->receiver = $config['receiver'];
    }
    public function log(string $message):void {
        echo $message , ' was sent via email ('.$this->receiver.')', "\n </br>";
    }
}