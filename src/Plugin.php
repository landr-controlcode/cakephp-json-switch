<?php

namespace ControlCodeJsonSwitch;

use Cake\Core\BasePlugin;
use ControlCodeJsonSwitch\Listeners\JsonRendererListener;
use Cake\Core\PluginApplicationInterface;

/**
 * Plugin for ControlCodeJsonSwitch
 */
class Plugin extends BasePlugin
{
    public function bootstrap(PluginApplicationInterface $app)
    {
        parent::bootstrap($app);
        $app->getEventManager()->on(new JsonRendererListener());
    }
}
