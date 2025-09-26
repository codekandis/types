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
				'expectedIdentityDetermination' => Values::BOOLEAN_TRUE
			],
			1 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createStdClassObject(),
				'expectedIdentityDetermination' => Values::BOOLEAN_FALSE
			],
			2 => [
				'type'                          => new Type(
					Values::createStdClassObject()
				),
				'object'                        => Values::createInheritedStdClassObject(),
				'expectedIdentityDetermination' => Values::BOOLEAN_FALSE
			],
			3 => [
				'type'                          => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'object'                        => $instance,
				'expectedIdentityDetermination' => Values::BOOLEAN_TRUE
			],
			4 => [
				'type'                          => new Type(
					Values::createStandardObjectFixture()
				),
				'object'                        => Values::createStandardObjectFixture(),
				'expectedIdentityDetermination' => Values::BOOLEAN_FALSE
			],
			5 => [
				'type'                          => new Type(
					Values::createStandardObjectFixture()
				),
				'object'                        => Values::createInheritedStandardObjectFixture(),
				'expectedIdentityDetermination' => Values::BOOLEAN_FALSE
			],
			6 => [
				'type'                          => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'object'                        => $instance,
				'expectedIdentityDetermination' => Values::BOOLEAN_TRUE
			],
			7 => [
				'type'                          => new Type(
					Values::createBaseObjectFixture()
				),
				'object'                        => Values::createBaseObjectFixture(),
				'expectedIdentityDetermination' => Values::BOOLEAN_FALSE
			],
			8 => [
				'type'                          => new Type(
					Values::createBaseObjectFixture()
				),
				'object'                        => Values::createInheritedBaseObjectFixture(),
				'expectedIdentityDetermination' => Values::BOOLEAN_FALSE
			],
		];
	}
}
