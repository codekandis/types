<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminator;
use Stringable;
use function get_resource_type;
use function sprintf;

/**
 * Represents an exception if an index is out of range.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexOutOfRangeException extends UnknownIndexException implements IndexOutOfRangeExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index is out of range.';

	/**
	 * Represents the exception message if an index is out of range.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE = 'The index `%s` is out of range.';

	/**
	 * Represents the exception message if an index is out of range and an expected minimum index and an expected maximum index is provided.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX = 'The index `%s` is out of range. `%s <= index <= %s` expected.';

	/**
	 * Stringifies a specific out of range index.
	 * @param mixed $outOfRangeIndex The out of range index to stringify.
	 * @return string The stringified out of range index.
	 */
	private static function stringifyOutOfRangeIndex( mixed $outOfRangeIndex ): string
	{
		$outOfRangeIndexType = ( new TypeDeterminator() )
			->determine( $outOfRangeIndex, TypeDeterminationKind::GetType );

		return match ( $outOfRangeIndexType )
		{
			GetTypeTypes::NULL            => MaskedTypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => MaskedTypeHintTypes::createTypedResource(
				get_resource_type( $outOfRangeIndex )
			),
			GetTypeTypes::CLOSED_RESOURCE => MaskedTypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => MaskedTypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => $outOfRangeIndex instanceof Stringable
				? $outOfRangeIndex->__toString()
				: MaskedTypeHintTypes::createTypedObject( $outOfRangeIndex::class ),
			GetTypeTypes::BOOLEAN         => MaskedTypeHintTypes::createTypedBoolean( $outOfRangeIndex ),
			default                       => (string) $outOfRangeIndex
		};
	}

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeIndex The out of range index.
	 * @return static
	 */
	public static function with_outOfRangeIndex( mixed $outOfRangeIndex ): static
	{
		$stringfiedOutOfRangeIndex = static::stringifyOutOfRangeIndex( $outOfRangeIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, $stringfiedOutOfRangeIndex )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeIndex The out of range index.
	 * @param string $expectedMinIndex The expected minimum index.
	 * @param string $expectedMaxIndex The expected maximum index.
	 * @return static
	 */
	public static function with_outOfRangeIndexExpectedMinIndexAndExpectedMaxIndex( mixed $outOfRangeIndex, string $expectedMinIndex, string $expectedMaxIndex ): static
	{
		$stringifiedOutOfRangeIndex = static::stringifyOutOfRangeIndex( $outOfRangeIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $stringifiedOutOfRangeIndex, $expectedMinIndex, $expectedMaxIndex )
		);
	}
}
