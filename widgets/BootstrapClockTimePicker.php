<?php
namespace djabiev\widgets;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use djabiev\assets\BootstrapClockTimePicker as BootstrapAsset;

/**
 * @inheritdoc
 */
class BootstrapClockTimePicker extends InputWidget
{
    /**
     * @var array the JS options for the widget
     * For example, [see this page](http://weareoutman.github.io/clockpicker/)
     */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'form-control');
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        BootstrapAsset::register($this->getView());

        $clientOptions = Json::htmlEncode($this->clientOptions);
        $this->view->registerJs(
            "jQuery('#{$this->options['id']}').clockpicker({$clientOptions});"
        );

        if ($this->hasModel()) {
            return Html::activeTextInput($this->model, $this->attribute, $this->options);
        }
        return Html::textInput($this->name, $this->value, $this->options);
    }
}