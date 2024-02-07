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
use CodeKandis\Types\InterfaceOrClassConstantNotFoundException;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundExceptionInterface;
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
				'interfaceOrClassName'                 => InterfaceOrClassConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			48  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassConstantNotFoundExceptionInterface::class
			],
			49  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			50  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantValueNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			51  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantValueNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassConstantValueNotFoundExceptionInterface::class
			],
			52  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantValueNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			53  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			54  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundExceptionInterface::class
			],
			55  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			56  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidIndexExceptionInterface::class
			],
			57  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			58  => [
				'interfaceOrClassName'                 => InvalidIndexExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			59  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetExceptionInterface::class
			],
			60  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			61  => [
				'interfaceOrClassName'                 => InvalidOffsetExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			62  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidTypeExceptionInterface::class
			],
			63  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			64  => [
				'interfaceOrClassName'                 => InvalidTypeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			65  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			66  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			67  => [
				'interfaceOrClassName'                 => InvalidValueExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			68  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			69  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => OriginLogicException::class
			],
			70  => [
				'interfaceOrClassName'                 => LogicExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			71  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			72  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedGetTypeTypesInterface::class
			],
			73  => [
				'interfaceOrClassName'                 => MaskedGetTypeTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			74  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			75  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => MaskedTypeHintTypesInterface::class
			],
			76  => [
				'interfaceOrClassName'                 => MaskedTypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			77  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			78  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			79  => [
				'interfaceOrClassName'                 => MethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			80  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			81  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => NotImplementedOperationExceptionInterface::class
			],
			82  => [
				'interfaceOrClassName'                 => NotImplementedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			83  => [
				'interfaceOrClassName'                 => ObjectInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringifyableInterface::class
			],
			84  => [
				'interfaceOrClassName'                 => ObjectNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			85  => [
				'interfaceOrClassName'                 => ObjectNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ObjectNotFoundExceptionInterface::class
			],
			86  => [
				'interfaceOrClassName'                 => ObjectNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			87  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetException::class
			],
			88  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => OffsetOutOfRangeExceptionInterface::class
			],
			89  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetExceptionInterface::class
			],
			90  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			91  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivateMethodNotFoundExceptionInterface::class
			],
			92  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			93  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivatePropertyNotFoundExceptionInterface::class
			],
			94  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			95  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			96  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			97  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			98  => [
				'interfaceOrClassName'                 => PropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			99  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			100 => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedMethodNotFoundExceptionInterface::class
			],
			101 => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			102 => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			103 => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedPropertyNotFoundExceptionInterface::class
			],
			104 => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			105 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			106 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicMethodNotFoundExceptionInterface::class
			],
			107 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			108 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			109 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicPropertyNotFoundExceptionInterface::class
			],
			110 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			111 => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => OriginRuntimeException::class
			],
			112 => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			113 => [
				'interfaceOrClassName'                 => RuntimeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			114 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundException::class
			],
			115 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNotFoundExceptionInterface::class
			],
			116 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			117 => [
				'interfaceOrClassName'                 => StringifyableInterface::class,
				'expectedAncestorInterfaceOrClassName' => Stringable::class
			],
			118 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			119 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => TraitNotFoundExceptionInterface::class
			],
			120 => [
				'interfaceOrClassName'                 => TraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			121 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			122 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => TypeInterface::class
			],
			123 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			124 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => TypeDeterminerInterface::class
			],
			125 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			126 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypeHintTypesInterface::class
			],
			127 => [
				'interfaceOrClassName'                 => TypeHintTypesInterface::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			128 => [
				'interfaceOrClassName'                 => TypeInterface::class,
				'expectedAncestorInterfaceOrClassName' => ObjectInterface::class
			],
			129 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			130 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => UnexpectedErrorExceptionInterface::class
			],
			131 => [
				'interfaceOrClassName'                 => UnexpectedErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			132 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			133 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => UnsupportedOperationExceptionInterface::class
			],
			134 => [
				'interfaceOrClassName'                 => UnsupportedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			135 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			136 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsEmptyExceptionInterface::class
			],
			137 => [
				'interfaceOrClassName'                 => ValueIsEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			138 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			139 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotEmptyExceptionInterface::class
			],
			140 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			141 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			142 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotNullExceptionInterface::class
			],
			143 => [
				'interfaceOrClassName'                 => ValueIsNotNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			144 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueException::class
			],
			145 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNullExceptionInterface::class
			],
			146 => [
				'interfaceOrClassName'                 => ValueIsNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
		];
	}
}
