<?php
/**
 * TimelineCssAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

/**
 * Load this asset with...
 * p2made\assets\TimelineCssAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\assets\TimelineCssAsset',
 */

namespace p2made\assets;

class TimelineCssAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '#/Timeline.css-1.0',
			'css' => [
				'css/timeline.css',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/timeline.css/1.0.0',
			'css' => [
				'timeline.min.css',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
