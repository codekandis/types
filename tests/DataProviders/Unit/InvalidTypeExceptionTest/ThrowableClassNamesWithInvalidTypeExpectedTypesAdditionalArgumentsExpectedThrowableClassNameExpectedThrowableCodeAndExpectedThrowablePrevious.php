<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function implode;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithInvalidTypeExpectedTypesAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_GET_TYPE_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType'   => $invalidType = Types::INVALID_TYPE,
					'expectedTypes' => $expectedTypes = Types::EXPECTED_MASKED_TYPE_HINT_TYPES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					implode( ' | ', $expectedTypes )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType'   => $invalidType,
						'expectedTypes' => $expectedTypes
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
