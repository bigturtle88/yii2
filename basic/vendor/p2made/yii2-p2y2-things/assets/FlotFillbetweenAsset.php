<?php
/**
 * FlotFillbetweenAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\FlotFillbetweenAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\FlotFillbetweenAsset',
 */

namespace p2made\assets;

class FlotFillbetweenAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/flot-0.8.3',
			'js' => [
				'jquery.flot.fillbetween.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3',
			'js' => [
				'jquery.flot.fillbetween.min.js',
			],
		],
		'depends' => [
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
