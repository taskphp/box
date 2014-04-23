<?php

namespace Task\Plugin;

use Task\Plugin\Console\ApplicationPlugin;
use KevinGH\Box\Application;

class BoxPlugin extends ApplicationPlugin implements PluginInterface
{
    public function __construct()
    {
        parent::__construct(new Application);
    }
}
