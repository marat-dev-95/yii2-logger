<?php

namespace app\controllers;

use yii\web\Controller;
use app\contracts\LoggerInterface;
use Yii;

class LogController extends Controller
{
    private $logger;

    public function __construct($id, $module, LoggerInterface $logger, $config = [])
    {
        $this->logger = $logger;
        parent::__construct($id, $module, $config);
    }

    /**
     * Sends a log message to the default logger.
     */
    public function actionLog()
    {
        $message = 'test message';
        $this->logger->send($message);
    }

    /**
     * Sends a log message to a special logger.
     *
     * @param string $type
     */
    public function actionLogTo()
    {
        $message = 'test message';
        $this->logger->setType(LoggerInterface::TYPE_FILE);
        $this->logger->send($message);
        $this->logger->send($message);
    }

    /**
     * Sends a log message to all loggers.
     */
    public function actionLogToAll()
    {
        $message = 'test message';
        $this->logger->sendByLogger($message, LoggerInterface::TYPE_FILE);
        $this->logger->sendByLogger($message, LoggerInterface::TYPE_EMAIL);
        $this->logger->sendByLogger($message, LoggerInterface::TYPE_DATABASE);
    }
}