<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InheritanceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\AccessErrorException;
use CodeKandis\Types\AccessErrorExceptionInterface;
use CodeKandis\Types\BaseObject;
use CodeKandis\Types\ClassNotFoundException;
use CodeKandis\Types\ClassNotFoundExceptionInterface;
use CodeKandis\Types\ConstantNotFoundException;
use CodeKandis\Types\ConstantNotFoundExceptionInterface;
use CodeKandis\Types\EnumNotFoundException;
use CodeKandis\Types\EnumNotFoundExceptionInterface;
use CodeKandis\Types\ErrorException;
use CodeKandis\Types\ErrorExceptionInterface;
use CodeKandis\Types\ExceptionInterface;
use CodeKandis\Types\FatalErrorException;
use CodeKandis\Types\FatalErrorExceptionInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\GetTypeTypesInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\IndexOutOfRangeExceptionInterface;
use CodeKandis\Types\InterfaceNotFoundException;
use CodeKandis\Types\InterfaceNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceOrClassNotFoundException;
use CodeKandis\Types\InterfaceOrClassNotFoundExceptionInterface;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\InvalidIndexExceptionInterface;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\InvalidOffsetExceptionInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\LogicException;
use CodeKandis\Types\LogicExceptionInterface;
use CodeKandis\Types\MaskedGetTypeTypes;
use CodeKandis\Types\MaskedGetTypeTypesInterface;
use CodeKandis\Types\MaskedTypeHintTypes;
use CodeKandis\Types\MaskedTypeHintTypesInterface;
use CodeKandis\Types\MethodNotFoundException;
use CodeKandis\Types\MethodNotFoundExceptionInterface;
use CodeKandis\Types\NotImplementedOperationException;
use CodeKandis\Types\NotImplementedOperationExceptionInterface;
use CodeKandis\Types\ObjectInterface;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\OffsetOutOfRangeExceptionInterface;
use CodeKandis\Types\PrivateMethodNotFoundException;
use CodeKandis\Types\PrivateMethodNotFoundExceptionInterface;
use CodeKandis\Types\PrivatePropertyNotFoundException;
use CodeKandis\Types\PrivatePropertyNotFoundExceptionInterface;
use CodeKandis\Types\PropertyNotFoundException;
use CodeKandis\Types\PropertyNotFoundExceptionInterface;
use CodeKandis\Types\ProtectedMethodNotFoundException;
use CodeKandis\Types\ProtectedMethodNotFoundExceptionInterface;
use CodeKandis\Types\ProtectedPropertyNotFoundException;
use CodeKandis\Types\ProtectedPropertyNotFoundExceptionInterface;
use CodeKandis\Types\PublicMethodNotFoundException;
use CodeKandis\Types\PublicMethodNotFoundExceptionInterface;
use CodeKandis\Types\PublicPropertyNotFoundException;
use CodeKandis\Types\PublicPropertyNotFoundExceptionInterface;
use CodeKandis\Types\RuntimeException;
use CodeKandis\Types\RuntimeExceptionInterface;
use CodeKandis\Types\StringifyableInterface;
use CodeKandis\Types\TraitNotFoundException;
use CodeKandis\Types\TraitNotFoundExceptionInterface;
use CodeKandis\Types\Type;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use CodeKandis\Types\TypeDetermination\TypeDeterminerInterface;
use CodeKandis\Types\TypeHintTypes;
use CodeKandis\Types\TypeHintTypesInterface;
use CodeKandis\Types\TypeInterface;
use CodeKandis\Types\TypesInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use CodeKandis\Types\UnknownIndexException;
use CodeKandis\Types\UnknownIndexExceptionInterface;
use CodeKandis\Types\UnsupportedOperationException;
use CodeKandis\Types\UnsupportedOperationExceptionInterface;
use CodeKandis\Types\ValueIsEmptyException;
use CodeKandis\Types\ValueIsEmptyExceptionInterface;
use CodeKandis\Types\ValueIsNotEmptyException;
use CodeKandis\Types\ValueIsNotEmptyExceptionInterface;
use CodeKandis\Types\ValueIsNotNullException;
use CodeKandis\Types\ValueIsNotNullExceptionInterface;
use CodeKandis\Types\ValueIsNullException;
use CodeKandis\Types\ValueIsNullExceptionInterface;
use LogicException as OriginLogicException;
use Override;
use RuntimeException as OriginRuntimeException;
use Stringable;
use Throwable;

/**
 * Represents a data provider providing interface or class names with expected ancestor interface or class name.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'interfaceOrClassName'                 => AccessErrorException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			1   => [
				'interfaceOrClassName'                 => AccessErrorException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			2   => [
				'interfaceOrClassName'                 => AccessErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			3   => [
				'interfaceOrClassName'                 => BaseObject::class,
				'expectedAncestorInterfaceOrClassName' => ObjectInterface::class
			],
			4   => [
				'interfaceOrClassName'                 => ClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			5   => [
				'interfaceOrClassName'                 => ClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ClassNotFoundExceptionInterface::class
			],
			6   => [
				'interfaceOrClassName'                 => ClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			7   => [
				'interfaceOrClassName'                 => ConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			8   => [
				'interfaceOrClassName'                 => ConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ConstantNotFoundExceptionInterface::class
			],
			9   => [
				'interfaceOrClassName'                 => ConstantNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			10  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			11  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundExceptionInterface::class
			],
			12  => [
				'interfaceOrClassName'                 => EnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			13  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => ErrorExceptionInterface::class
			],
			14  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			15  => [
				'interfaceOrClassName'                 => ErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			16  => [
				'interfaceOrClassName'                 => ExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => Throwable::class
			],
			17  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => FatalErrorExceptionInterface::class
			],
			18  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			19  => [
				'interfaceOrClassName'                 => FatalErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			20  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			21  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => GetTypeTypesInterface::class
			],
			22  => [
				'interfaceOrClassName'                 => GetTypeTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			23  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => IndexOutOfRangeExceptionInterface::class
			],
			24  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => UnknownIndexException::class
			],
			25  => [
				'interfaceOrClassName'                 => IndexOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => UnknownIndexExceptionInterface::class
			],
			26  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			27  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNotFoundExceptionInterface::class
			],
			28  => [
				'interfaceOrClassName'                 => InterfaceNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			29  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			30  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundExceptionInterface::class
			],
			31  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			32  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidIndexExceptionInterface::class
			],
			33  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			34  => [
				'interfaceOrClassName'                 => InvalidIndexExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			35  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetExceptionInterface::class
			],
			36  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			37  => [
				'interfaceOrClassName'                 => InvalidOffsetExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			38  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidTypeExceptionInterface::class
			],
			39  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			40  => [
				'interfaceOrClassName'                 => InvalidTypeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			41  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			42  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			43  => [
				'interfaceOrClassName'                 => InvalidValueExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			44  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			45  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => OriginLogicException::class
			],
			46  => [
				'interfaceOrClassName'                 => LogicExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			47  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			48  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedGetTypeTypesInterface::class
			],
			49  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			50  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			51  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedTypeHintTypesInterface::class
			],
			52  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			53  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			54  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			55  => [
				'interfaceOrClassName'                 => MethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			56  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			57  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => NotImplementedOperationExceptionInterface::class
			],
			58  => [
				'interfaceOrClassName'                 => NotImplementedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			59  => [
				'interfaceOrClassName'                 => ObjectInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringifyableInterface::class
			],
			60  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => OffsetOutOfRangeExceptionInterface::class
			],
			61  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			62  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			63  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			64  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivateMethodNotFoundExceptionInterface::class
			],
			65  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			66  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivatePropertyNotFoundExceptionInterface::class
			],
			67  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			68  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			69  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			70  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			71  => [
				'interfaceOrClassName'                 => PropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			72  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			73  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedMethodNotFoundExceptionInterface::class
			],
			74  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			75  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			76  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedPropertyNotFoundExceptionInterface::class
			],
			77  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			78  => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			79  => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicMethodNotFoundExceptionInterface::class
			],
			80  => [
				'interfaceOrClassName'                 => PublicMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			81  => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			82  => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicPropertyNotFoundExceptionInterface::class
			],
			83  => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			84  => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => OriginRuntimeException::class
			],
			85  => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			86  => [
				'interfaceOrClassName'                 => RuntimeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			87  => [
				'interfaceOrClassName'                 => StringifyableInterface::class,
				'expectedAncestorInterfaceOrClassName' => Stringable::class
			],
			88  => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			89  => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => TraitNotFoundExceptionInterface::class
			],
			90  => [
				'interfaceOrClassName'                 => TraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			91  => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			92  => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => TypeInterface::class
			],
			93  => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			94  => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => TypeDeterminerInterface::class
			],
			95  => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			96  => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypeHintTypesInterface::class
			],
			97  => [
				'interfaceOrClassName'                 => TypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			98  => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			99  => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => UnexpectedErrorExceptionInterface::class
			],
			100 => [
				'interfaceOrClassName'                 => UnexpectedErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			101 => [
				'interfaceOrClassName'                 => UnknownIndexException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			102 => [
				'interfaceOrClassName'                 => UnknownIndexException::class,
				'expectedAncestorInterfaceOrClassName' => UnknownIndexExceptionInterface::class
			],
			103 => [
				'interfaceOrClassName'                 => UnknownIndexExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			104 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			105 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => UnsupportedOperationExceptionInterface::class
			],
			106 => [
				'interfaceOrClassName'                 => UnsupportedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			107 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			108 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsEmptyExceptionInterface::class
			],
			109 => [
				'interfaceOrClassName'                 => ValueIsEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			110 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			111 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotEmptyExceptionInterface::class
			],
			112 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			113 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			114 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotNullExceptionInterface::class
			],
			115 => [
				'interfaceOrClassName'                 => ValueIsNotNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			116 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			117 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNullExceptionInterface::class
			],
			118 => [
				'interfaceOrClassName'                 => ValueIsNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			]
		];
	}
}
