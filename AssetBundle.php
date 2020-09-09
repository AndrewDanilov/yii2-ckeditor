<?php
namespace andrewdanilov\ckeditor;

use yii\web\View;

/**
 * Class AssetBundle
 * @package andrewdanilov\ckeditor
 */
class AssetBundle extends \yii\web\AssetBundle
{
    public $js = [
        'ckeditor/ckeditor.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        $this->jsOptions['position'] = View::POS_END;

        parent::init();
    }
}