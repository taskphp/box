<?php

namespace Task\Plugin;

use Task\Plugin\Console\ApplicationPlugin;
use KevinGH\Box\Application;

class BoxPlugin extends ApplicationPlugin implements PluginInterface
{
    public function __construct($boxPath = './vendor/kherge/box')
    {
        if (!defined('BOX_PATH')) {
            if (file_exists($boxPath)) {
                define('BOX_PATH', $boxPath);
            } else {
                throw new \InvalidArgumentException("Box library not found at $boxPath");
            }
        }

        parent::__construct(new Application);
    }
}
