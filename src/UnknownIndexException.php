<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Stringable;
use function get_resource_type;
use function implode;
use function sprintf;

/**
 * Represents an exception if an index does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnknownIndexException extends RuntimeException implements UnknownIndexExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index does not exist.';

	/**
	 * Represents the exception message if an index does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_UNKNOWN_INDEX = 'The index `%s` does not exist.';

	/**
	 * Represents the exception message if an index does not exist and expected indices are provided.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_UNKNOWN_INDEX_AND_EXPECTED_INDICES = 'The index `%s` does not exist. `%s` expected.';

	/**
	 * Stringifies a specific unknown index.
	 * @param mixed $unknownIndex The unknown index to stringify.
	 * @return string The stringified unknown index.
	 */
	private static function stringifyUnknownIndex( mixed $unknownIndex ): string
	{
		$unknownIndexType = ( new TypeDeterminer() )
			->determine( $unknownIndex, TypeDeterminationKind::GetType );

		return match ( $unknownIndexType )
		{
			GetTypeTypes::NULL            => MaskedTypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => MaskedTypeHintTypes::createTypedResource(
				get_resource_type( $unknownIndex )
			),
			GetTypeTypes::CLOSED_RESOURCE => MaskedTypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => MaskedTypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => $unknownIndex instanceof Stringable
				? $unknownIndex->__toString()
				: MaskedTypeHintTypes::createTypedObject( $unknownIndex::class ),
			GetTypeTypes::BOOLEAN         => MaskedTypeHintTypes::createTypedBoolean( $unknownIndex ),
			default                       => (string) $unknownIndex
		};
	}

	/**
	 * Static constructor method.
	 * @param mixed $unknownIndex The unknown index.
	 * @return static
	 */
	public static function with_unknownIndex( mixed $unknownIndex ): static
	{
		$stringfiedUnknownIndex = static::stringifyUnknownIndex( $unknownIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_UNKNOWN_INDEX, $stringfiedUnknownIndex )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $unknownIndex The unknown index.
	 * @param string[] $expectedIndices The expected indices.
	 * @return static
	 */
	public static function with_unknownIndexAndExpectedIndices( mixed $unknownIndex, string ...$expectedIndices ): static
	{
		$stringifiedUnknownIndex    = static::stringifyUnknownIndex( $unknownIndex );
		$stringyfiedExpectedIndices = implode( ' | ', $expectedIndices );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_UNKNOWN_INDEX_AND_EXPECTED_INDICES, $stringifiedUnknownIndex, $stringyfiedExpectedIndices )
		);
	}
}
