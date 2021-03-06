<?php

namespace Materail;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Bootstrap Material css and js files.
 *
 * @author Romanos Tsouroplis <rom-dim@hotmail.com>
 */
class BootMaterialJsAsset extends AssetBundle
{
	public $sourcePath = '@Material/bootstrap-material-design/dist';
	public $js = [
		'js/ripples.min.js',
		'js/material.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
