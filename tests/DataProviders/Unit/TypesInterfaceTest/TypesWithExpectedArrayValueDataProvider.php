<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\DecoratedGetTypeTypes;
use CodeKandis\Types\DecoratedTypeHintTypes;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with expected `array` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class TypesWithExpectedArrayValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'              => new GetTypeTypes(),
				'expectedArrayValue' => Types::GET_TYPE_TYPE_ARRAY
			],
			1 => [
				'types'              => new DecoratedGetTypeTypes(),
				'expectedArrayValue' => Types::DECORATED_GET_TYPE_TYPE_ARRAY
			],
			2 => [
				'types'              => new TypeHintTypes(),
				'expectedArrayValue' => Types::TYPE_HINT_TYPE_ARRAY
			],
			3 => [
				'types'              => new DecoratedTypeHintTypes(),
				'expectedArrayValue' => Types::DECORATED_TYPE_HINT_TYPE_ARRAY
			]
		];
	}
}
