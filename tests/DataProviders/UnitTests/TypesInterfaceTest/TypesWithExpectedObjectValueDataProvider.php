<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\MaskedGetTypeTypes;
use CodeKandis\Types\MaskedTypeHintTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with expected `object` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedObjectValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'               => new GetTypeTypes(),
				'expectedObjectValue' => Types::GET_TYPE_TYPE_OBJECT
			],
			1 => [
				'types'               => new MaskedGetTypeTypes(),
				'expectedObjectValue' => Types::MASKED_GET_TYPE_TYPE_OBJECT
			],
			2 => [
				'types'               => new TypeHintTypes(),
				'expectedObjectValue' => Types::TYPE_HINT_TYPE_OBJECT
			],
			3 => [
				'types'               => new MaskedTypeHintTypes(),
				'expectedObjectValue' => Types::MASKED_TYPE_HINT_TYPE_OBJECT
			],
		];
	}
}
