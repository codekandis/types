<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\DecoratedGetTypeTypes;
use CodeKandis\Types\DecoratedTypeHintTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with expected `integer` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedIntegerValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                => new GetTypeTypes(),
				'expectedIntegerValue' => Types::GET_TYPE_TYPE_INTEGER
			],
			1 => [
				'types'                => new DecoratedGetTypeTypes(),
				'expectedIntegerValue' => Types::DECORATED_GET_TYPE_TYPE_INTEGER
			],
			2 => [
				'types'                => new TypeHintTypes(),
				'expectedIntegerValue' => Types::TYPE_HINT_TYPE_INTEGER
			],
			3 => [
				'types'                => new DecoratedTypeHintTypes(),
				'expectedIntegerValue' => Types::DECORATED_TYPE_HINT_TYPE_INTEGER
			]
		];
	}
}
