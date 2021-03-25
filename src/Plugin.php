<?php
namespace cbp\redactorFaList;

use cbp\redactorFaList\models\Settings;
use Craft;
use craft\redactor\events\RegisterPluginPathsEvent;
use craft\redactor\Field;
use yii\base\Event;
use yii\web\View;

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

        if ( Craft::$app->request->isCpRequest && Craft::$app->getUser()->getIdentity() ) {
            // the includeJs method lets us add js to the bottom of the page
            Craft::$app->getView()->registerJsVar('FAListIcons', $this->getSettings()->icons, View::POS_HEAD);
        }
    }

    public function RegisterPluginPath(RegisterPluginPathsEvent $event)
    {
        $event->paths[] = \dirname(__DIR__) . '/src/resources/';
    }

    protected function createSettingsModel()
    {
        return new Settings();
    }
}