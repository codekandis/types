<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected reflected class.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedReflectedClassDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'                   => new Type(
					$instance = Values::createStdClassObject()
				),
				'expectedReflectedClass' => Values::createReflectionClass( $instance )
			],
			1 => [
				'type'                   => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedReflectedClass' => Values::createReflectionClass( $instance )
			],
			2 => [
				'type'                   => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'expectedReflectedClass' => Values::createReflectionClass( $instance )
			],
			3 => [
				'type'                   => new Type(
					$instance = Values::createInheritedStandardObjectFixture()
				),
				'expectedReflectedClass' => Values::createReflectionClass( $instance )
			],
			4 => [
				'type'                   => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'expectedReflectedClass' => Values::createReflectionClass( $instance )
			],
			5 => [
				'type'                   => new Type(
					$instance = Values::createInheritedBaseObjectFixture()
				),
				'expectedReflectedClass' => Values::createReflectionClass( $instance )
			],
		];
	}
}
