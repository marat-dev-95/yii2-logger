<?php

namespace app\contracts;

interface LoggerInterface
{
    const TYPE_FILE = 'file';
    const TYPE_DATABASE = 'database';
    const TYPE_EMAIL = 'email';


    /**
     * Sends message to current logger.
     *
     * @param string $message
     * @return void
     */
    public function send(string $message): void;

    /**
     * Sends message by selected logger.
     *
     * @param string $message
     * @param string $loggerType
     * @return void
     */
    public function sendByLogger(string $message, string $loggerType): void;

    /**
     * Gets current logger type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Sets current logger type.
     *
     * @param string $type
     * @return void
     */
    public function setType(string $type): void;
}