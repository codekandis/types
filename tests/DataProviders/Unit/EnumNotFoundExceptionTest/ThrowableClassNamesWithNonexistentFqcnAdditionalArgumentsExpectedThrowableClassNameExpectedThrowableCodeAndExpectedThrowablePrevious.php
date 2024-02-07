<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\EnumNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\EnumNotFoundException;
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
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35 => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( EnumNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
