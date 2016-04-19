<?php
/**
 * FlotTooltipAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\FlotTooltipAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FlotTooltipAsset',
 */

namespace p2made\assets;

class FlotTooltipAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/flot.tooltip',
			'js' => [
				'js/jquery.flot.tooltip.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot.tooltip/0.8.7',
			'js' => [
				'jquery.flot.tooltip.min.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
