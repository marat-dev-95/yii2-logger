<?php

namespace app\components\logger;

interface LoggerTypeInterface 
{
    public function log(string $message): void;
}