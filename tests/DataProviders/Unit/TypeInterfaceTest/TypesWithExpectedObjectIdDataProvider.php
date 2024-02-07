<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected object ID.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedObjectIdDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'             => new Type(
					$instance = Values::createStdClassObject()
				),
				'expectedObjectId' => Values::createObjectId( $instance )
			],
			1 => [
				'type'             => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedObjectId' => Values::createObjectId( $instance )
			],
			2 => [
				'type'             => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'expectedObjectId' => Values::createObjectId( $instance )
			],
			3 => [
				'type'             => new Type(
					$instance = Values::createInheritedStandardObjectFixture()
				),
				'expectedObjectId' => Values::createObjectId( $instance )
			],
			4 => [
				'type'             => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'expectedObjectId' => Values::createObjectId( $instance )
			],
			5 => [
				'type'             => new Type(
					$instance = Values::createInheritedBaseObjectFixture()
				),
				'expectedObjectId' => Values::createObjectId( $instance )
			]
		];
	}
}
