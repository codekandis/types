<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected identity determination.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedIdentityDeterminationDataProvider implements DataProviderInterface
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
				'expectedIdentityDetermination' => true
			],
			1 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createStdClassObject(),
				'expectedIdentityDetermination' => false
			],
			2 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createInheritedStdClassObject(),
				'expectedIdentityDetermination' => false
			],
			3 => [
				'type'                          => new Type(
					$instance = Values::createStandardObject()
				),
				'object'                        => $instance,
				'expectedIdentityDetermination' => true
			],
			4 => [
				'type'                          => new Type(
					Values::createStandardObject()
				),
				'object'                        => Values::createStandardObject(),
				'expectedIdentityDetermination' => false
			],
			5 => [
				'type'                          => new Type(
					Values::createStandardObject()
				),
				'object'                        => Values::createInheritedStandardObject(),
				'expectedIdentityDetermination' => false
			],
			6 => [
				'type'                          => new Type(
					$instance = Values::createBaseObject()
				),
				'object'                        => $instance,
				'expectedIdentityDetermination' => true
			],
			7 => [
				'type'                          => new Type(
					Values::createBaseObject()
				),
				'object'                        => Values::createBaseObject(),
				'expectedIdentityDetermination' => false
			],
			8 => [
				'type'                          => new Type(
					Values::createBaseObject()
				),
				'object'                        => Values::createInheritedBaseObject(),
				'expectedIdentityDetermination' => false
			]
		];
	}
}
