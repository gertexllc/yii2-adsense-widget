# Yii2 Adsense Widget

[![Latest Stable Version](https://poser.pugx.org/gertexllc/yii2-adsense-widget/v)](//packagist.org/packages/gertexllc/yii2-adsense-widget) [![Total Downloads](https://poser.pugx.org/gertexllc/yii2-adsense-widget/downloads)](//packagist.org/packages/gertexllc/yii2-adsense-widget) [![License](https://poser.pugx.org/gertexllc/yii2-adsense-widget/license)](//packagist.org/packages/gertexllc/yii2-adsense-widget)

A Yii2 widget for displaying Google Adsense ads.

## Installation

The preferred way to install this extension is through [Composer](https://getcomposer.org/).

Either run

```
composer require gertexllc/yii2-adsense-widget
```

or add

```
"gertexllc/yii2-adsense-widget": "^1.0"
```

to the require section of your `composer.json` file.

## Usage

Use the widget in your view file like this:

```php
<?= \gertexllc\widgets\AdsenseWidget::widget([
    'client' => 'your_ad_client_id',
    'slot' => 'your_ad_slot_id',
]) ?>
```

You can also specify additional parameters like `format` and `responsive`:

```php
<?= \gertexllc\widgets\AdsenseWidget::widget([
    'client' => 'your_ad_client_id',
    'slot' => 'your_ad_slot_id',
    'format' => 'auto',
    'responsive' => true,
]) ?>
```

## Configuration

You can configure the widget using the following properties:

- `client`: The Google Adsense client ID.
- `slot`: The Google Adsense slot ID.
- `format`: The ad format. Defaults to `'auto'`.
- `responsive`: Whether to use responsive ads. Defaults to `true`.

## License

This package is released under the MIT License. See the [LICENSE](LICENSE) file for details.

## Support

If you have any questions or issues, please [open an issue](https://github.com/gertexllc/yii2-adsense-widget/issues).