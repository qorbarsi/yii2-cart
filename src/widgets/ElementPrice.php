<?php
namespace dvizh\cart\widgets;

use yii\helpers\Html;

class ElementPrice extends \yii\base\Widget
{
    public $model = NULL;
    public $cssClass = NULL;
    public $htmlTag = 'span';

    public function init()
    {
        parent::init();
        return true;
    }

    public function run()
    {
        return Html::tag($this->htmlTag, \yii::$app->cart->getFormatted($this->model->price), [
            'class' => "dvizh-cart-element-price{$this->model->getId()} {$this->cssClass}",
        ]);
    }
}
