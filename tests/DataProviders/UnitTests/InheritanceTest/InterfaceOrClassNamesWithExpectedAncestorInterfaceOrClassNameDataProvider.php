<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InheritanceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\AccessErrorException;
use CodeKandis\Types\AccessErrorExceptionInterface;
use CodeKandis\Types\BackedEnumNotFoundException;
use CodeKandis\Types\BackedEnumNotFoundExceptionInterface;
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
use CodeKandis\Types\IntegerBackedEnumNotFoundException;
use CodeKandis\Types\IntegerBackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundExceptionInterface;
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
use CodeKandis\Types\StringBackedEnumNotFoundException;
use CodeKandis\Types\StringBackedEnumNotFoundExceptionInterface;
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
				'interfaceOrClassName'                 => BackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundException::class
			],
			4   => [
				'interfaceOrClassName'                 => BackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			5   => [
				'interfaceOrClassName'                 => BackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundExceptionInterface::class
			],
			6   => [
				'interfaceOrClassName'                 => BaseObject::class,
				'expectedAncestorInterfaceOrClassName' => ObjectInterface::class
			],
			7   => [
				'interfaceOrClassName'                 => ClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			8   => [
				'interfaceOrClassName'                 => ClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ClassNotFoundExceptionInterface::class
			],
			9   => [
				'interfaceOrClassName'                 => ClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			10  => [
				'interfaceOrClassName'                 => ConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			11  => [
				'interfaceOrClassName'                 => ConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ConstantNotFoundExceptionInterface::class
			],
			12  => [
				'interfaceOrClassName'                 => ConstantNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			13  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			14  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundExceptionInterface::class
			],
			15  => [
				'interfaceOrClassName'                 => EnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			16  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => ErrorExceptionInterface::class
			],
			17  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			18  => [
				'interfaceOrClassName'                 => ErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			19  => [
				'interfaceOrClassName'                 => ExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => Throwable::class
			],
			20  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => FatalErrorExceptionInterface::class
			],
			21  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			22  => [
				'interfaceOrClassName'                 => FatalErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			23  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			24  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => GetTypeTypesInterface::class
			],
			25  => [
				'interfaceOrClassName'                 => GetTypeTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			26  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => IndexOutOfRangeExceptionInterface::class
			],
			27  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => UnknownIndexException::class
			],
			28  => [
				'interfaceOrClassName'                 => IndexOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => UnknownIndexExceptionInterface::class
			],
			29  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundException::class
			],
			30  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNotFoundExceptionInterface::class
			],
			31  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			32  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			33  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class
			],
			34  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			35  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			36  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNotFoundExceptionInterface::class
			],
			37  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			38  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			39  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNotFoundExceptionInterface::class
			],
			40  => [
				'interfaceOrClassName'                 => InterfaceNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			41  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			42  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundExceptionInterface::class
			],
			43  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			44  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidIndexExceptionInterface::class
			],
			45  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			46  => [
				'interfaceOrClassName'                 => InvalidIndexExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			47  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetExceptionInterface::class
			],
			48  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			49  => [
				'interfaceOrClassName'                 => InvalidOffsetExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			50  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidTypeExceptionInterface::class
			],
			51  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			52  => [
				'interfaceOrClassName'                 => InvalidTypeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			53  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			54  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			55  => [
				'interfaceOrClassName'                 => InvalidValueExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			56  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			57  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => OriginLogicException::class
			],
			58  => [
				'interfaceOrClassName'                 => LogicExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			59  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			60  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedGetTypeTypesInterface::class
			],
			61  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			62  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			63  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedTypeHintTypesInterface::class
			],
			64  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			65  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			66  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			67  => [
				'interfaceOrClassName'                 => MethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			68  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			69  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => NotImplementedOperationExceptionInterface::class
			],
			70  => [
				'interfaceOrClassName'                 => NotImplementedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			71  => [
				'interfaceOrClassName'                 => ObjectInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringifyableInterface::class
			],
			72  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => OffsetOutOfRangeExceptionInterface::class
			],
			73  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			74  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			75  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			76  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivateMethodNotFoundExceptionInterface::class
			],
			77  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			78  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivatePropertyNotFoundExceptionInterface::class
			],
			79  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			80  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			81  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			82  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			83  => [
				'interfaceOrClassName'                 => PropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			84  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			85  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedMethodNotFoundExceptionInterface::class
			],
			86  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			87  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			88  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedPropertyNotFoundExceptionInterface::class
			],
			89  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			90  => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			91  => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicMethodNotFoundExceptionInterface::class
			],
			92  => [
				'interfaceOrClassName'                 => PublicMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			93  => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			94  => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicPropertyNotFoundExceptionInterface::class
			],
			95  => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			96  => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => OriginRuntimeException::class
			],
			97  => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			98  => [
				'interfaceOrClassName'                 => RuntimeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			99  => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundException::class
			],
			100 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNotFoundExceptionInterface::class
			],
			101 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			102 => [
				'interfaceOrClassName'                 => StringifyableInterface::class,
				'expectedAncestorInterfaceOrClassName' => Stringable::class
			],
			103 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			104 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => TraitNotFoundExceptionInterface::class
			],
			105 => [
				'interfaceOrClassName'                 => TraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			106 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			107 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => TypeInterface::class
			],
			108 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			109 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => TypeDeterminerInterface::class
			],
			110 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			111 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypeHintTypesInterface::class
			],
			112 => [
				'interfaceOrClassName'                 => TypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			113 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			114 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => UnexpectedErrorExceptionInterface::class
			],
			115 => [
				'interfaceOrClassName'                 => UnexpectedErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			116 => [
				'interfaceOrClassName'                 => UnknownIndexException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			117 => [
				'interfaceOrClassName'                 => UnknownIndexException::class,
				'expectedAncestorInterfaceOrClassName' => UnknownIndexExceptionInterface::class
			],
			118 => [
				'interfaceOrClassName'                 => UnknownIndexExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			119 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			120 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => UnsupportedOperationExceptionInterface::class
			],
			121 => [
				'interfaceOrClassName'                 => UnsupportedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			122 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			123 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsEmptyExceptionInterface::class
			],
			124 => [
				'interfaceOrClassName'                 => ValueIsEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			125 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			126 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotEmptyExceptionInterface::class
			],
			127 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			128 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			129 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotNullExceptionInterface::class
			],
			130 => [
				'interfaceOrClassName'                 => ValueIsNotNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			131 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			132 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNullExceptionInterface::class
			],
			133 => [
				'interfaceOrClassName'                 => ValueIsNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			]
		];
	}
}
