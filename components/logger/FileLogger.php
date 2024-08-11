<?php
namespace app\components\logger;

use app\components\logger\LoggerTypeInterface;

class FileLogger implements LoggerTypeInterface 
{

    private string $filePath;

    public function __construct(array $config) {
        $this->filePath = $config['file_path'];
    }
    public function log(string $message):void {
        echo $message , ' was sent via file ('.$this->filePath.')', "\n </br>";
    }
}