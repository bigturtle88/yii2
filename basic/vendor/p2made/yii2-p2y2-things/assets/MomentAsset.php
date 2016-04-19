<?php
/**
 * MomentAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\MomentAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\MomentAsset',
 */

namespace p2made\assets;

class MomentAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/moment/min',
			'js' => [
				'moment.min.js'
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0',
			'js' => [
				'moment.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
