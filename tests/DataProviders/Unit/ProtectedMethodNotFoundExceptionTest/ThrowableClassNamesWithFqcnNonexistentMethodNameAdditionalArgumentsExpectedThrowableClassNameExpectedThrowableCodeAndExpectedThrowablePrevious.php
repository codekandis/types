<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\ProtectedMethodNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\ProtectedMethodNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithFqcnNonexistentMethodNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ProtectedMethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
