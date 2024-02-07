<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\StringifyableInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\BaseObject;
use Override;

/**
 * Represents a data provider providing stringifyables with expected `string` representation.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringifyablesWithExpectedStringRepresentationDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'stringifyable'                => $stringifyable = new class() extends BaseObject
				{
				},
				'expectedStringRepresentation' => $stringifyable::class
			],
		];
	}
}
