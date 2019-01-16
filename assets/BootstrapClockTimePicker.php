<?php
namespace djabiev\assets;

use yii\web\AssetBundle;

class BootstrapClockTimePicker extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/clockpicker/dist';

    /**
     * @inheritdoc
     */
    public $css = ['bootstrap-clockpicker.css'];

    /**
     * @inheritdoc
     */
    public $js = ['bootstrap-clockpicker.js'];

    /**
     * @inheritdoc
     */
    public $depends = ['yii\bootstrap\BootstrapPluginAsset'];
}