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
            $view = Craft::$app->getView();
            $scripts = $this->getSettings()->scripts;
            $styles = $this->getSettings()->styles;
            // the includeJs method lets us add js to the bottom of the page
            $view->registerJsVar('FAListIcons', $this->getSettings()->icons, View::POS_HEAD);

            //adds Font Awesome kit script
            if(!empty($scripts)){
                foreach($scripts as $script){
                    if(is_array($script) && isset($script['src'])){
                        $view->registerJsFile($script['src'], isset($script['params']) ? $script['params'] : []);
                    }
                    elseif(is_string($script)) $view->registerJsFile($script);
                }
            }
            //adds Font Awesome font styles
            if(!empty($styles)){
                foreach($styles as $style){
                    $view->registerCssFile($style);
                }
            }
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