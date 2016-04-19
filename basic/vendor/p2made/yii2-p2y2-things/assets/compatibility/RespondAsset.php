<?php
/**
 * RespondAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman * @license MIT
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 */

namespace p2made\assets\compatibility;

class RespondAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@vendor/bower/respond/dest',
			'js' => [
				'respond.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2',
			'js' => [
				'respond.min.js',
			],
		],
		'jsOptions' => [
			'condition' => 'lte IE9',
			'position' => \yii\web\View::POS_HEAD,
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
