<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected equality determination.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedEqualityDeterminationDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'                          => new Type(
					$instance = Values::createStdClassObject()
				),
				'object'                        => $instance,
				'expectedEqualityDetermination' => Values::BOOLEAN_TRUE
			],
			1 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createStdClassObject(),
				'expectedEqualityDetermination' => Values::BOOLEAN_TRUE
			],
			2 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createInheritedStdClassObject(),
				'expectedEqualityDetermination' => Values::BOOLEAN_FALSE
			],
			3 => [
				'type'                          => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'object'                        => $instance,
				'expectedEqualityDetermination' => Values::BOOLEAN_TRUE
			],
			4 => [
				'type'                          => new Type(
					Values::createStandardObjectFixture()
				),
				'object'                        => Values::createStandardObjectFixture(),
				'expectedEqualityDetermination' => Values::BOOLEAN_TRUE
			],
			5 => [
				'type'                          => new Type(
					Values::createStandardObjectFixture()
				),
				'object'                        => Values::createInheritedStandardObjectFixture(),
				'expectedEqualityDetermination' => Values::BOOLEAN_FALSE
			],
			6 => [
				'type'                          => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'object'                        => $instance,
				'expectedEqualityDetermination' => Values::BOOLEAN_TRUE
			],
			7 => [
				'type'                          => new Type(
					Values::createBaseObjectFixture()
				),
				'object'                        => Values::createBaseObjectFixture(),
				'expectedEqualityDetermination' => Values::BOOLEAN_TRUE
			],
			8 => [
				'type'                          => new Type(
					Values::createBaseObjectFixture()
				),
				'object'                        => Values::createInheritedBaseObjectFixture(),
				'expectedEqualityDetermination' => Values::BOOLEAN_FALSE
			],
		];
	}
}
