<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;
use ReflectionObject;

/**
 * Represents a data provider providing types with expected reflected object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedReflectedObjectDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'                    => new Type(
					$instance = Values::createStdClassObject()
				),
				'expectedReflectedObject' => new ReflectionObject( $instance )
			],
			1 => [
				'type'                    => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedReflectedObject' => new ReflectionObject( $instance )
			],
			2 => [
				'type'                    => new Type(
					$instance = Values::createStandardObject()
				),
				'expectedReflectedObject' => new ReflectionObject( $instance )
			],
			3 => [
				'type'                    => new Type(
					$instance = Values::createInheritedStandardObject()
				),
				'expectedReflectedObject' => new ReflectionObject( $instance )
			],
			4 => [
				'type'                    => new Type(
					$instance = Values::createBaseObject()
				),
				'expectedReflectedObject' => new ReflectionObject( $instance )
			],
			5 => [
				'type'                    => new Type(
					$instance = Values::createInheritedBaseObject()
				),
				'expectedReflectedObject' => new ReflectionObject( $instance )
			]
		];
	}
}
