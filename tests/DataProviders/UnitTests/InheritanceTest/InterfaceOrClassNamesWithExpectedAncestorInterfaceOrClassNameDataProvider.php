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
use CodeKandis\Types\DuplicateObjectException;
use CodeKandis\Types\DuplicateObjectExceptionInterface;
use CodeKandis\Types\EnumNotFoundException;
use CodeKandis\Types\EnumNotFoundExceptionInterface;
use CodeKandis\Types\ErrorException;
use CodeKandis\Types\ErrorExceptionInterface;
use CodeKandis\Types\ExceptionInterface;
use CodeKandis\Types\FatalErrorException;
use CodeKandis\Types\FatalErrorExceptionInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\GetTypeTypesInterface;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\IndexNotFoundExceptionInterface;
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
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\ObjectNotFoundExceptionInterface;
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
	 * @inheritdoc
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
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			4   => [
				'interfaceOrClassName'                 => BackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundException::class
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
				'interfaceOrClassName'                 => DuplicateObjectException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			14  => [
				'interfaceOrClassName'                 => DuplicateObjectException::class,
				'expectedAncestorInterfaceOrClassName' => ObjectNotFoundExceptionInterface::class
			],
			15  => [
				'interfaceOrClassName'                 => DuplicateObjectExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			16  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			17  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundExceptionInterface::class
			],
			18  => [
				'interfaceOrClassName'                 => EnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			19  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => ErrorExceptionInterface::class
			],
			20  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			21  => [
				'interfaceOrClassName'                 => ErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			22  => [
				'interfaceOrClassName'                 => ExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => Throwable::class
			],
			23  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => FatalErrorExceptionInterface::class
			],
			24  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			25  => [
				'interfaceOrClassName'                 => FatalErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			26  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			27  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => GetTypeTypesInterface::class
			],
			28  => [
				'interfaceOrClassName'                 => GetTypeTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			29  => [
				'interfaceOrClassName'                 => IndexNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => IndexNotFoundExceptionInterface::class
			],
			30  => [
				'interfaceOrClassName'                 => IndexNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			31  => [
				'interfaceOrClassName'                 => IndexNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			32  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => IndexOutOfRangeExceptionInterface::class
			],
			33  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidIndexException::class
			],
			34  => [
				'interfaceOrClassName'                 => IndexOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidIndexExceptionInterface::class
			],
			35  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundException::class
			],
			36  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNotFoundExceptionInterface::class
			],
			37  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			38  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			39  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class
			],
			40  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			41  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			42  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNotFoundExceptionInterface::class
			],
			43  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			44  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			45  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNotFoundExceptionInterface::class
			],
			46  => [
				'interfaceOrClassName'                 => InterfaceNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			47  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			48  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundExceptionInterface::class
			],
			49  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			50  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidIndexExceptionInterface::class
			],
			51  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			52  => [
				'interfaceOrClassName'                 => InvalidIndexExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			53  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetExceptionInterface::class
			],
			54  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			55  => [
				'interfaceOrClassName'                 => InvalidOffsetExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			56  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidTypeExceptionInterface::class
			],
			57  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			58  => [
				'interfaceOrClassName'                 => InvalidTypeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			59  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			60  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			61  => [
				'interfaceOrClassName'                 => InvalidValueExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			62  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			63  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => OriginLogicException::class
			],
			64  => [
				'interfaceOrClassName'                 => LogicExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			65  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			66  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedGetTypeTypesInterface::class
			],
			67  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			68  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			69  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedTypeHintTypesInterface::class
			],
			70  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			71  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			72  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			73  => [
				'interfaceOrClassName'                 => MethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			74  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			75  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => NotImplementedOperationExceptionInterface::class
			],
			76  => [
				'interfaceOrClassName'                 => NotImplementedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			77  => [
				'interfaceOrClassName'                 => ObjectInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringifyableInterface::class
			],
			78  => [
				'interfaceOrClassName'                 => ObjectNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			79  => [
				'interfaceOrClassName'                 => ObjectNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ObjectNotFoundExceptionInterface::class
			],
			80  => [
				'interfaceOrClassName'                 => ObjectNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			81  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetException::class
			],
			82  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => OffsetOutOfRangeExceptionInterface::class
			],
			83  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetExceptionInterface::class
			],
			84  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			85  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivateMethodNotFoundExceptionInterface::class
			],
			86  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			87  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivatePropertyNotFoundExceptionInterface::class
			],
			88  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			89  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			90  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			91  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			92  => [
				'interfaceOrClassName'                 => PropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			93  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			94  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedMethodNotFoundExceptionInterface::class
			],
			95  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			96  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			97  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedPropertyNotFoundExceptionInterface::class
			],
			98  => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			99  => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			100 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicMethodNotFoundExceptionInterface::class
			],
			101 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			102 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			103 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicPropertyNotFoundExceptionInterface::class
			],
			104 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			105 => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => OriginRuntimeException::class
			],
			106 => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			107 => [
				'interfaceOrClassName'                 => RuntimeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			108 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundException::class
			],
			109 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNotFoundExceptionInterface::class
			],
			110 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			111 => [
				'interfaceOrClassName'                 => StringifyableInterface::class,
				'expectedAncestorInterfaceOrClassName' => Stringable::class
			],
			112 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			113 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => TraitNotFoundExceptionInterface::class
			],
			114 => [
				'interfaceOrClassName'                 => TraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			115 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			116 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => TypeInterface::class
			],
			117 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			118 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => TypeDeterminerInterface::class
			],
			119 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			120 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypeHintTypesInterface::class
			],
			121 => [
				'interfaceOrClassName'                 => TypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			122 => [
				'interfaceOrClassName'                 => TypeInterface::class,
				'expectedAncestorInterfaceOrClassName' => ObjectInterface::class
			],
			123 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			124 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => UnexpectedErrorExceptionInterface::class
			],
			125 => [
				'interfaceOrClassName'                 => UnexpectedErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			126 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			127 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => UnsupportedOperationExceptionInterface::class
			],
			128 => [
				'interfaceOrClassName'                 => UnsupportedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			129 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			130 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsEmptyExceptionInterface::class
			],
			131 => [
				'interfaceOrClassName'                 => ValueIsEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			132 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			133 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotEmptyExceptionInterface::class
			],
			134 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			135 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			136 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotNullExceptionInterface::class
			],
			137 => [
				'interfaceOrClassName'                 => ValueIsNotNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			138 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			139 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNullExceptionInterface::class
			],
			140 => [
				'interfaceOrClassName'                 => ValueIsNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			]
		];
	}
}
