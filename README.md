Djabiev Yii2 ClockTimePicker
=========================

Bootstrap Yii2 widgets for [clockpicker](https://github.com/weareoutman/clockpicker)
(clock-like time picker) jquery plugin

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "djabiev/yii2-clocktimepicker:*"
```

or add

```
"djabiev/yii2-clocktimepicker": "*"
```

to the `require` section of your `composer.json` file.

## Usage

In the view file register the asset:

```php
use djabiev\widgets\BootstrapClockTimePicker;


// with ActiveForm
echo $form->field($model, 'attribute')->widget(BootstrapClockTimePicker::className() [
    // extra configuration
]);

// without ActiveForm and with model.
echo BootstrapClockTimePicker::widget([
    'model' => $model,
    'attribute' => 'time_start',
]);

```

## Documentation

The JS options can be passed using the `$clientOptions` property and the events
can be declared using the `$clientEvents` property. [The documentation on all the
options and events supported by clockpicker can be found here.](http://weareoutman.github.io/clockpicker/)

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.