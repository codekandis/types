<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\DuplicateObjectExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\DuplicateObjectException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithDuplicatedFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
