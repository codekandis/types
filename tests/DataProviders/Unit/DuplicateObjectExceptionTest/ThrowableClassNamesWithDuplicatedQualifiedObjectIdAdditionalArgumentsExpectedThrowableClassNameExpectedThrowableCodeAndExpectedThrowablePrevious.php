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
class ThrowableClassNamesWithDuplicatedQualifiedObjectIdAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedQualifiedObjectId' => $duplicatedQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
