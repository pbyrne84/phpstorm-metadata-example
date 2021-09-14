<?php declare( strict_types=1 );

namespace PHPSTORM_META;

//Handle passing of types to instances and static methods
override( \TestFactory::staticMethod( 0 ), type( 0 ) );
override( \TestFactory::instanceMethod( 0 ), type( 0 ) );

//Handle passing of strings to instances and static methods. e.g. "\DomDocument"
override( \TestFactory::staticMethod( 0 ), map( [ '' => '@' ] ) );
override( \TestFactory::instanceMethod( 0 ), map( [ '' => '@' ] ) );

//Handle masks to instances and static methods - makes \Dom be \DomDocument
override( \TestFactory::maskMethod( 0 ), map( [ '' => '@Document' ] ) );

