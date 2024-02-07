<?php declare( strict_types = 1 );

use Rector\CodeQuality\Rector\BooleanOr\RepeatedOrEqualToInArrayRector;
use Rector\CodeQuality\Rector\Class_\ConvertStaticToSelfRector;
use Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector;
use Rector\DeadCode\Rector\Property\RemoveUselessVarTagRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

/**
 * Sets up the rector configuration.
 * @param RectorConfig $rectorConfig The config to set up.
 */
$setupRectorConfiguration = static function ( RectorConfig $rectorConfig ): void
{
	$rectorConfig->sets(
		[
			LevelSetList::UP_TO_PHP_85,
			SetList::CODE_QUALITY,
			SetList::CODING_STYLE,
			SetList::DEAD_CODE,
			SetList::EARLY_RETURN,
			SetList::GMAGICK_TO_IMAGICK,
			SetList::INSTANCEOF,
			SetList::PRIVATIZATION,
			SetList::TYPE_DECLARATION
		]
	);

	$rectorConfig->skip(
		[
			ConvertStaticToSelfRector::class,
			RemoveUselessReturnTagRector::class,
			RemoveUselessVarTagRector::class,
			RepeatedOrEqualToInArrayRector::class,
			SimplifyBoolIdenticalTrueRector::class
		]
	);

	$rectorConfig->paths(
		[
			sprintf(
				'%s/src',
				dirname( __DIR__, 1 )
			)
		]
	);
};

return $setupRectorConfiguration;
