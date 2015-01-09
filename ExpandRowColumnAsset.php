<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-grid
 * @version 3.0.0
 */

namespace kartik\grid;

use yii\web\View;

/**
 * Asset bundle for GridView ExpandRowColumn
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class ExpandRowColumnAsset extends AssetBundle
{
    /**
     * @inherit doc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/kv-grid-expand']);
        $this->setupAssets('css', ['css/kv-grid-expand']);
        parent::init();
    }
}
