<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Stringable;
use function get_resource_type;
use function implode;
use function sprintf;

/**
 * Represents an exception if an index is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidIndexException extends RuntimeException implements InvalidIndexExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index is invalid.';

	/**
	 * Represents the exception message if an index is invalid.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_INDEX = 'The index `%s` is invalid.';

	/**
	 * Represents the exception message if an index is invalid and expected indices are provided.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES = 'The index `%s` is invalid. `%s` expected.';

	/**
	 * Stringifies a specific invalid index.
	 * @param mixed $invalidIndex The invalid index to stringify.
	 * @return string The stringified invalid index.
	 */
	private static function stringifyInvalidIndex( mixed $invalidIndex ): string
	{
		$invalidIndexType = new TypeDeterminer()
			->determine( $invalidIndex, TypeDeterminationKind::GetType );

		return match ( $invalidIndexType )
		{
			GetTypeTypes::NULL            => MaskedTypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => MaskedTypeHintTypes::createTypedResource(
				get_resource_type( $invalidIndex )
			),
			GetTypeTypes::CLOSED_RESOURCE => MaskedTypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => MaskedTypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => $invalidIndex instanceof Stringable
				? $invalidIndex->__toString()
				: MaskedTypeHintTypes::createTypedObject( $invalidIndex::class ),
			GetTypeTypes::BOOLEAN         => MaskedTypeHintTypes::createTypedBoolean( $invalidIndex ),
			default                       => (string) $invalidIndex
		};
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidIndex The invalid index.
	 * @return static
	 */
	public static function with_invalidIndex( mixed $invalidIndex ): static
	{
		$stringfiedInvalidIndex = static::stringifyInvalidIndex( $invalidIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INVALID_INDEX, $stringfiedInvalidIndex )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidIndex The invalid index.
	 * @param string[] $expectedIndices The expected indices.
	 * @return static
	 */
	public static function with_invalidIndexAndExpectedIndices( mixed $invalidIndex, string ...$expectedIndices ): static
	{
		$stringifiedInvalidIndex    = static::stringifyInvalidIndex( $invalidIndex );
		$stringyfiedExpectedIndices = implode( ' | ', $expectedIndices );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES, $stringifiedInvalidIndex, $stringyfiedExpectedIndices )
		);
	}
}
