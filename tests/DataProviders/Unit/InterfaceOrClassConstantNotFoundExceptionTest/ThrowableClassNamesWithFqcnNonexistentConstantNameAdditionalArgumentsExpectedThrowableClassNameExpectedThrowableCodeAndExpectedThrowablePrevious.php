<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InterfaceOrClassConstantNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithFqcnNonexistentConstantNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			22 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			23 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			27 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			33 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			34 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			39 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			40 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			41 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			42 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			43 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			44 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			45 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			46 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			47 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			48 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			49 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			50 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			51 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			52 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			53 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			54 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			60 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			61 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			66 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			67 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			68 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			69 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			70 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			71 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			72 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			73 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			74 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			75 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			76 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			77 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			78 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			79 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			],
			80 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentConstantName' => $nonexistentConstantName
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
