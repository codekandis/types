<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InterfaceClassEnumOrTraitNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonexistentFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			36 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			38 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			39 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			49 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			50 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			51 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			52 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			55 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			56 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			57 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			61 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			62 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			63 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			67 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
