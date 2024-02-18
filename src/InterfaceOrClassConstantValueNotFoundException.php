<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use function sprintf;

/**
 * Represents an exception if an interface or class constant value does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassConstantValueNotFoundException extends AccessErrorException implements InterfaceOrClassConstantValueNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface or class constant value does not exist.';

	/**
	 * Represents the exception message with the interface or class name and nonexistent constant value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE = 'The interface or class constant value `%1$s::%2$s` does not exist.';

	/**
	 * Stringifies a specific value.
	 * @param mixed $value The value to stringify.
	 * @return string The stringified value.
	 */
	protected static function stringifyValue( mixed $value ): string
	{
		$valueType = new TypeDeterminer()->determine( $value, TypeDeterminationKind::GetType );

		$getTypeTypes        = new GetTypeTypes();
		$maskedTypeHintTypes = new MaskedTypeHintTypes();

		return match ( $valueType )
		{
			$getTypeTypes->null    => $maskedTypeHintTypes->null,
			$getTypeTypes->array   => $maskedTypeHintTypes->array,
			$getTypeTypes->boolean => $maskedTypeHintTypes->createTypedBoolean( $value ),
			default                => (string) $value
		};
	}

	/**
	 * Static constructor method.
	 * @param string $interfaceOrClassName The interface or class name of the nonexistent constant value.
	 * @param null|bool|int|float|string|array $nonExistentConstantValue The nonexistent constant value.
	 * @return static
	 */
	public static function withInterfaceOrClassNameAndNonExistentConstantValue( string $interfaceOrClassName, null | bool | int | float | string | array $nonExistentConstantValue ): static
	{
		$stringifiedNonExistentConstantValue = static::stringifyValue( $nonExistentConstantValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $stringifiedNonExistentConstantValue )
		);
	}
}
