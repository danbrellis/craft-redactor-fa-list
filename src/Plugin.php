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

    public function init() {
        parent::init();
        self::$plugin = $this;

        if (!Craft::$app->request->isConsoleRequest && Craft::$app->request->isCpRequest) {
            Event::on(Field::class, Field::EVENT_REGISTER_PLUGIN_PATHS, [$this, 'RegisterPluginPath']);
        }
    }

    public function RegisterPluginPath(RegisterPluginPathsEvent $event) {
        $event->paths[] = \dirname(__DIR__) . '/src/resources/';

        $view = Craft::$app->getView();
        $scripts = $this->getSettings()->scripts;
        $styles = $this->getSettings()->styles;
        // the includeJs method lets us add js to the bottom of the page
        $view->registerJsVar('FAListIcons', $this->getSettings()->icons, View::POS_HEAD);

        //adds Font Awesome font styles
        if(!empty($styles)){
            foreach($styles as $style){
                if(is_array($style) && isset($style['src'])){
                    $view->registerCssFile($style['src'], isset($style['params']) ? $style['params'] : []);
                }
                elseif(is_string($style)) $view->registerCssFile($style);
            }
        }
    }

    protected function createSettingsModel() {
        return new Settings();
    }
}