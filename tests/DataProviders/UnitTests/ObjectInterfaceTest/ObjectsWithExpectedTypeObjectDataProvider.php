<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing objects with expected type object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectsWithExpectedTypeObjectDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'object'             => $object = Values::createBaseObjectFixture(),
				'expectedTypeObject' => new Type( $object )
			],
			1 => [
				'object'             => $object = Values::createInheritedBaseObjectFixture(),
				'expectedTypeObject' => new Type( $object )
			],
		];
	}
}
