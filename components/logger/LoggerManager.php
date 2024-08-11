<?php
namespace app\components\logger;
use app\contracts\LoggerInterface;
use yii\base\Component;




class LoggerManager extends Component implements LoggerInterface 
{
    private $config;
    private LoggerFactory $factory;
    private string $defaultType;

    public function __construct(array $config) {
        $this->factory = new LoggerFactory($config['config']['config']);
        $this->defaultType = $config['config']['default_logger_type'];
    }
    public function send(string $message): void {
        $sender = $this->factory->create($this->defaultType);
        $sender->log($message);
    }

    public function sendByLogger(string $message, string $loggerType):void {
        $sender = $this->factory->create($loggerType);

        $sender->log($message);
    }

    public function getType():string {
        return $this->defaultType;
    }
    
    public function setType(string $type): void {
        $this->defaultType = $type;
    }
}