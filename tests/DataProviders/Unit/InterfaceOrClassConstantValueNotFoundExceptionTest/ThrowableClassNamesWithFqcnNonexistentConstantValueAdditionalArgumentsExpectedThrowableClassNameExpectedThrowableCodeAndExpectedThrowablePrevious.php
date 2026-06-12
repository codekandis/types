<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InterfaceOrClassConstantValueNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\Tests\Fixtures\StringifiedValues;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithFqcnNonexistentConstantValueAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			216 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			217 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			218 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			219 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			220 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			221 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			222 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			223 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			224 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			225 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			226 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			227 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			228 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			229 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			230 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			231 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			232 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			233 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			234 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			235 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			236 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			237 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			238 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			239 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			240 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			241 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			242 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			243 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			244 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			245 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			246 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			247 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			248 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			249 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			250 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			251 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			252 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			253 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			254 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			255 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			256 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			257 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			258 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			259 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			260 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			261 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			262 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			263 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			264 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			265 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			266 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			267 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			268 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			269 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			270 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			271 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			272 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			273 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			274 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			275 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			276 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			277 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			278 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			279 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			280 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			281 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			282 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			283 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			284 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			285 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			286 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			287 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			288 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			289 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			290 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			291 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			292 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			293 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			294 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			295 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			296 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			297 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			298 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			299 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			300 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			301 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			302 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			303 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			304 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			305 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			306 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			307 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			308 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			309 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			310 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			311 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			312 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			313 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			314 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			315 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			316 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			317 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			318 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			319 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			320 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			321 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			322 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			323 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			324 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			325 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			326 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			327 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			328 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			329 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			330 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			331 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			332 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			333 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			334 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			335 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			336 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			337 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			338 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			339 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			340 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			341 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			342 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			343 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			344 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			345 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			346 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			347 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			348 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			349 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			350 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			351 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			352 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			353 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			354 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			355 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			356 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			357 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			358 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			359 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			360 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			361 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			362 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			363 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			364 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			365 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			366 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			367 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			368 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			369 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			370 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			371 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			372 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			373 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			374 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			375 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			376 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			377 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			378 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			379 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			380 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			381 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			382 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			383 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			384 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			385 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			386 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			387 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			388 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			389 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			390 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			391 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			392 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			393 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			394 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			395 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			396 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			397 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			398 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			399 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			400 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			401 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			402 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			403 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			404 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			405 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			406 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			407 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			408 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			409 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			410 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			411 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			412 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			413 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			414 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			415 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			416 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			417 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			418 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			419 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			420 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			421 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			422 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			423 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			424 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			425 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			426 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			427 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			428 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			429 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			430 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			431 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			432 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			433 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			434 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			435 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			436 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			437 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			438 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			439 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			440 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			441 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			442 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			443 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			444 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			445 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			446 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			447 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			448 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			449 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			450 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			451 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			452 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			453 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			454 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			455 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			456 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			457 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			458 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			459 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			460 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			461 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			462 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			463 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			464 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			465 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			466 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			467 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			468 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			469 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			470 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			471 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			472 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			473 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			474 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			475 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			476 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			477 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			478 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			479 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			480 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			481 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			482 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			483 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			484 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			485 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			486 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			487 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			488 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			489 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			490 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			491 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			492 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			493 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			494 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			495 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			496 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			497 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			498 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			499 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			500 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			501 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			502 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			503 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			504 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			505 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			506 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			507 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			508 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			509 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			510 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			511 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			512 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			513 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			514 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			515 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			516 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			517 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			518 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			519 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			520 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			521 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			522 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			523 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			524 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			525 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			526 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			527 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			528 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			529 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			530 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			531 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			532 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			533 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			534 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			535 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			536 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			537 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			538 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			539 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			540 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			541 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			542 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			543 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			544 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			545 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			546 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			547 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			548 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			549 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			550 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			551 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			552 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			553 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			554 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			555 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			556 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			557 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			558 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			559 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			560 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			561 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			562 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			563 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			564 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			565 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			],
			566 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => $nonexistentConstantValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                     => $fqcn,
						'nonexistentConstantValue' => $nonexistentConstantValue
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
