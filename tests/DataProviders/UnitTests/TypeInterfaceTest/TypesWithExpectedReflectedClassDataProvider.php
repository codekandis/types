<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;
use ReflectionClass;

/**
 * Represents a data provider providing types with expected reflected class.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedReflectedClassDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'                   => new Type(
					$instance = Values::createStdClassObject()
				),
				'expectedReflectedClass' => new ReflectionClass( $instance )
			],
			1 => [
				'type'                   => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedReflectedClass' => new ReflectionClass( $instance )
			],
			2 => [
				'type'                   => new Type(
					$instance = Values::createStandardObject()
				),
				'expectedReflectedClass' => new ReflectionClass( $instance )
			],
			3 => [
				'type'                   => new Type(
					$instance = Values::createInheritedStandardObject()
				),
				'expectedReflectedClass' => new ReflectionClass( $instance )
			],
			4 => [
				'type'                   => new Type(
					$instance = Values::createBaseObject()
				),
				'expectedReflectedClass' => new ReflectionClass( $instance )
			],
			5 => [
				'type'                   => new Type(
					$instance = Values::createInheritedBaseObject()
				),
				'expectedReflectedClass' => new ReflectionClass( $instance )
			]
		];
	}
}
