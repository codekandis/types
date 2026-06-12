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
final class ThrowableClassNamesWithDuplicatedFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			6  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			7  => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8  => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9  => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			12 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			13 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			14 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			15 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			16 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			17 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			18 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			19 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			20 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			21 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			22 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			23 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			24 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			25 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			26 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			27 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28 => [
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29 => [
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			33 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			34 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			39 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			40 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			41 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			42 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			43 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			44 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			45 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			46 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			47 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			48 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			49 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			50 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			51 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			52 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			],
			53 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'mainArguments'              => [
					'duplicatedFqcn' => $duplicatedFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( DuplicateObjectException::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'duplicatedFqcn' => $duplicatedFqcn
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
