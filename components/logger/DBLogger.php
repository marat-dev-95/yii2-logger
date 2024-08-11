<?php
namespace app\components\logger;

use app\components\logger\LoggerTypeInterface;

class DBLogger implements LoggerTypeInterface 
{

    private string $table;

    public function __construct(array $config) {
        $this->table = $config['table'];
    }
    public function log(string $message):void {
        echo $message , ' was sent via db ('.$this->table.')',  "\n </br>";
    }
}