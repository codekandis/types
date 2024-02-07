<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected reflected object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedReflectedObjectDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'                    => new Type(
					$instance = Values::createStdClassObject()
				),
				'expectedReflectedObject' => Values::createReflectionObject( $instance )
			],
			1 => [
				'type'                    => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedReflectedObject' => Values::createReflectionObject( $instance )
			],
			2 => [
				'type'                    => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'expectedReflectedObject' => Values::createReflectionObject( $instance )
			],
			3 => [
				'type'                    => new Type(
					$instance = Values::createInheritedStandardObjectFixture()
				),
				'expectedReflectedObject' => Values::createReflectionObject( $instance )
			],
			4 => [
				'type'                    => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'expectedReflectedObject' => Values::createReflectionObject( $instance )
			],
			5 => [
				'type'                    => new Type(
					$instance = Values::createInheritedBaseObjectFixture()
				),
				'expectedReflectedObject' => Values::createReflectionObject( $instance )
			],
		];
	}
}
