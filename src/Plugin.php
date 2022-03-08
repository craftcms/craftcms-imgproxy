<?php

namespace PluginName;

use Psr\Log\LogLevel;

class Plugin extends \craft\base\Plugin
{
    public function install()
    {
        \Craft::$app->log->logger->log('this', LogLevel::ALERT);

        return parent::install();
    }
}
