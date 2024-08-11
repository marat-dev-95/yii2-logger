<?php
namespace app\components\logger;

use app\contracts\LoggerInterface;


class LoggerFactory 
{

    private array $config;

    public function __construct(array $config) 
    {
        $this->config = $config;    
    }   

    public  function create(string $loggerType): LoggerTypeInterface 
    {
        return match($loggerType) {
            LoggerInterface::TYPE_FILE => new FileLogger($this->config['file']),
            LoggerInterface::TYPE_EMAIL => new EmailLogger($this->config['email']),
            LoggerInterface::TYPE_DATABASE => new DBLogger($this->config['database']),
            default => throw new \InvalidArgumentException("Unsupported logger type: {$loggerType}"),
        };
    }
}