<?php
namespace Modules\Json;

class JsExpression extends \yii\web\JsExpression {
    public function __construct($expression, $config = [])
    {
        $this->expression = $expression;
    }
}