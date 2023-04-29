<?php

namespace gertexllc\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use Yii;

class AdsenseWidget extends Widget
{
    public $client;
    public $slot;
    public $format = 'auto';
    public $responsive = true;

    public function init()
    {
        parent::init();

        if ($this->client === null) {
            throw new \yii\base\InvalidConfigException('The "client" property must be set.');
        }

        if ($this->slot === null) {
            throw new \yii\base\InvalidConfigException('The "slot" property must be set.');
        }
    }

    public function run()
    {
        $view = $this->getView();
        $options = Json::encode([
            'client' => $this->client,
            'slot' => $this->slot,
            'format' => $this->format,
            'responsive' => $this->responsive
        ]);
        $view->registerJs("(adsbygoogle = window.adsbygoogle || []).push({$options});", View::POS_END, 'adsense-widget');
        return Html::tag('ins', '', [
            'class' => 'adsbygoogle',
            'style' => 'display:block',
            'data-ad-client' => $this->client,
            'data-ad-slot' => $this->slot,
            'data-ad-format' => $this->format,
            'data-full-width-responsive' => $this->responsive ? 'true' : 'false'
        ]);
    }
}
