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
class ThrowableClassNamesWithFqcnNonexistentConstantNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
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
				'expectedThrowablePrevious'  => $throwablePrevious
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5  => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6  => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7  => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8  => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10 => [
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11 => [
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantName' => $nonexistentConstantName = Values::CONSTANT_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceOrClassConstantNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19 => [
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20 => [
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26 => [
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
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
