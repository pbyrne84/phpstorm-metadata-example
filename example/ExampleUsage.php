<?php


class ExampleUsage {

    private $fieldTestFactory;


    public function __construct() {
        $this->fieldTestFactory = new TestFactory();
    }


    public function staticUsage() {
        $domDocumentFromStaticMethodUsingClassConstant = TestFactory::staticMethod( DOMDocument::class );
        $baseURIFromStaticMethodUsingClassConstant     = $domDocumentFromStaticMethodUsingClassConstant->baseURI;

        $domDocumentFromStaticMethodUsingInstant = TestFactory::staticMethod( new DOMDocument() );
        $baseURIFromStaticMethodUsingInstant     = $domDocumentFromStaticMethodUsingInstant->baseURI;

        $domDocumentFromStaticMethodUsingString = TestFactory::staticMethod( "\DomDocument" );
        $baseURIFromStaticMethodUsingString     = $domDocumentFromStaticMethodUsingString->baseURI;

        $domDocumentFromChildStaticMethodUsingInstant = ChildFactory::staticMethod( new DOMDocument() );
        $domDocumentFromChildStaticMethodUsingInstant = $domDocumentFromChildStaticMethodUsingInstant->baseURI;

        $domDocumentFromChildStaticMethodUsingString = ChildFactory::staticMethod( "\DomDocument" );
        $baseURIFromChildStaticMethodUsingString     = $domDocumentFromChildStaticMethodUsingString->baseURI;

        // Note this does not work if
        // TestFactory::staticMethod(TestFactory::staticMethod( DOMDocument::class ))
        // possibly thge same for all
        $staticMethod1 = TestFactory::staticMethod( DOMDocument::class );
        $staticMethod2 = TestFactory::staticMethod( $staticMethod1 );
        $attributes    = $staticMethod2->attributes;


    }


    public function instanceUsage() {
        $testFactory = new TestFactory();

        $domDocumentFromInstanceMethodUsingClassConstant = $testFactory->instanceMethod( DOMDocument::class );
        $baseURIFromINstanceMethodUsingClassConstant     = $domDocumentFromInstanceMethodUsingClassConstant->baseURI;

        $domDocumentFromStaticMethodUsingInstant = $testFactory->instanceMethod( new DOMDocument() );
        $baseURIFromStaticMethodUsingInstant     = $domDocumentFromStaticMethodUsingInstant->baseURI;

        $domDocumentFromStaticMethodUsingString = $testFactory->instanceMethod( "\DomDocument" );
        $baseURIFromStaticMethodUsingString     = $domDocumentFromStaticMethodUsingString->baseURI;

        $childFactory                                 = new ChildFactory();
        $domDocumentFromChildStaticMethodUsingInstant = $childFactory->instanceMethod( new DOMDocument() );
        $domDocumentFromChildStaticMethodUsingInstant = $domDocumentFromChildStaticMethodUsingInstant->baseURI;

        $domDocumentFromChildStaticMethodUsingString = $childFactory->instanceMethod( "\DomDocument" );
        $baseURIFromChildStaticMethodUsingString     = $domDocumentFromChildStaticMethodUsingString->baseURI;


    }


    public function maskedUsage() {
        $testFactory                                  = new TestFactory();
        $domDocumentFromInstanceMethodUsingMaskString = $testFactory->maskMethod( "\Dom" );
        $baseURIFromInstanceMethodUsingString         = $domDocumentFromInstanceMethodUsingMaskString->baseURI;
    }


    public function instanceFromAnInstance() {
        $domdocument1 = TestFactory::staticMethod( DOMDocument::class );
        $domdocument2 = TestFactory::staticMethod( $domdocument1 );
        $attributes   = $domdocument2->attributes;
    }


    public function instanceFromAnInstanceUsaingAMask() {
        $testFactory = new TestFactory();

        $domdocument1 = $testFactory->maskMethod( "\Dom" );
        $domdocument2 = TestFactory::staticMethod( $domdocument1 );
        $attributes   = $domdocument2->attributes;

        $domdocument3 = $this->fieldTestFactory->maskMethod( "\Dom" );
        $domdocument4 = TestFactory::staticMethod( $domdocument1 );
        $attributes   = $domdocument2->attributes;

    }

}