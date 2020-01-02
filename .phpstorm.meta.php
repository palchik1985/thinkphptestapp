<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Mongo' instanceof Think\Model\MongoModel,
			'Adv' instanceof Think\Model\AdvModel,
			'MobileAppView' instanceof Home\Model\MobileAppViewModel,
			'View' instanceof Think\Model\ViewModel,
			'Relation' instanceof Think\Model\RelationModel,
			'MobileApp' instanceof Home\Model\MobileAppModel,
			'Merge' instanceof Think\Model\MergeModel,
		],
	];
}