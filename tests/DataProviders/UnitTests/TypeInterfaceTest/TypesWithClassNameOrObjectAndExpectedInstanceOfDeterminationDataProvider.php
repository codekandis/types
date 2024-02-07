<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with class name or object and expected instance of determination.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithClassNameOrObjectAndExpectedInstanceOfDeterminationDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'type'                            => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			1  => [
				'type'                            => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			2  => [
				'type'                            => new Type(
					Values::createStandardObjectFixture()
				),
				'classNameOrObject'               => Values
					::createStandardObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			3  => [
				'type'                            => new Type(
					Values::createStandardObjectFixture()
				),
				'classNameOrObject'               => Values::createStandardObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			4  => [
				'type'                            => new Type(
					Values::createStandardObjectFixture()
				),
				'classNameOrObject'               => Values
					::createInheritedStandardObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_FALSE
			],
			5  => [
				'type'                            => new Type(
					Values::createStandardObjectFixture()
				),
				'classNameOrObject'               => Values::createInheritedStandardObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_FALSE
			],
			6  => [
				'type'                            => new Type(
					$instance = Values::createInheritedStandardObjectFixture()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			7  => [
				'type'                            => new Type(
					$instance = Values::createInheritedStandardObjectFixture()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			8  => [
				'type'                            => new Type(
					Values::createInheritedStandardObjectFixture()
				),
				'classNameOrObject'               => Values
					::createInheritedStandardObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			9  => [
				'type'                            => new Type(
					Values::createInheritedStandardObjectFixture()
				),
				'classNameOrObject'               => Values::createInheritedStandardObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			10 => [
				'type'                            => new Type(
					Values::createInheritedStandardObjectFixture()
				),
				'classNameOrObject'               => Values
					::createStandardObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			11 => [
				'type'                            => new Type(
					Values::createInheritedStandardObjectFixture()
				),
				'classNameOrObject'               => Values::createStandardObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			12 => [
				'type'                            => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			13 => [
				'type'                            => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			14 => [
				'type'                            => new Type(
					Values::createBaseObjectFixture()
				),
				'classNameOrObject'               => Values
					::createBaseObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			15 => [
				'type'                            => new Type(
					Values::createBaseObjectFixture()
				),
				'classNameOrObject'               => Values::createBaseObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			16 => [
				'type'                            => new Type(
					Values::createBaseObjectFixture()
				),
				'classNameOrObject'               => Values
					::createInheritedBaseObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_FALSE
			],
			17 => [
				'type'                            => new Type(
					Values::createBaseObjectFixture()
				),
				'classNameOrObject'               => Values::createInheritedBaseObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_FALSE
			],
			18 => [
				'type'                            => new Type(
					$instance = Values::createInheritedBaseObjectFixture()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			19 => [
				'type'                            => new Type(
					$instance = Values::createInheritedBaseObjectFixture()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			20 => [
				'type'                            => new Type(
					Values::createInheritedBaseObjectFixture()
				),
				'classNameOrObject'               => Values
					::createInheritedBaseObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			21 => [
				'type'                            => new Type(
					Values::createInheritedBaseObjectFixture()
				),
				'classNameOrObject'               => Values::createInheritedBaseObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			22 => [
				'type'                            => new Type(
					Values::createInheritedBaseObjectFixture()
				),
				'classNameOrObject'               => Values
					::createBaseObjectFixture()
					::class,
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
			23 => [
				'type'                            => new Type(
					Values::createInheritedBaseObjectFixture()
				),
				'classNameOrObject'               => Values::createBaseObjectFixture(),
				'expectedInstanceOfDetermination' => Values::BOOLEAN_TRUE
			],
		];
	}
}
