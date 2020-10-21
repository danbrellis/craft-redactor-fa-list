<?php
namespace cbp\redactorFaList;

use Craft;
use craft\redactor\events\RegisterPluginPathsEvent;
use craft\redactor\Field;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    // Static Properties
    // =========================================================================

    public static $plugin;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        if (!Craft::$app->request->isConsoleRequest && Craft::$app->request->isCpRequest) {
            Event::on(Field::class, Field::EVENT_REGISTER_PLUGIN_PATHS, [$this, 'RegisterPluginPath']);
        }
    }

    public function RegisterPluginPath(RegisterPluginPathsEvent $event)
    {
        $event->paths[] = \dirname(__DIR__) . '/src/resources/';
    }
}