<?php
namespace weijianghu\gentelella\assets;

class Asset extends \yii\web\AssetBundle
{
    public $depends = [
        'weijianghu\gentelella\assets\ThemeAsset',
        'weijianghu\gentelella\assets\ExtensionAsset',
    ];
}
