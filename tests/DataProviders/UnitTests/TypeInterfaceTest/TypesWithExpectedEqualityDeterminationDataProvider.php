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
	 * @inheritDoc
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
				'expectedEqualityDetermination' => true
			],
			1 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createStdClassObject(),
				'expectedEqualityDetermination' => true
			],
			2 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createInheritedStdClassObject(),
				'expectedEqualityDetermination' => false
			],
			3 => [
				'type'                          => new Type(
					$instance = Values::createStandardObject()
				),
				'object'                        => $instance,
				'expectedEqualityDetermination' => true
			],
			4 => [
				'type'                          => new Type(
					Values::createStandardObject()
				),
				'object'                        => Values::createStandardObject(),
				'expectedEqualityDetermination' => true
			],
			5 => [
				'type'                          => new Type(
					Values::createStandardObject()
				),
				'object'                        => Values::createInheritedStandardObject(),
				'expectedEqualityDetermination' => false
			],
			6 => [
				'type'                          => new Type(
					$instance = Values::createBaseObject()
				),
				'object'                        => $instance,
				'expectedEqualityDetermination' => true
			],
			7 => [
				'type'                          => new Type(
					Values::createBaseObject()
				),
				'object'                        => Values::createBaseObject(),
				'expectedEqualityDetermination' => true
			],
			8 => [
				'type'                          => new Type(
					Values::createBaseObject()
				),
				'object'                        => Values::createInheritedBaseObject(),
				'expectedEqualityDetermination' => false
			]
		];
	}
}
