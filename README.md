# phpstorm-metadata-example

Examples of
https://www.jetbrains.com/help/phpstorm/ide-advanced-metadata.html

The PHP plugin for PhpStorm/Intellij uses **.phpstorm.meta.php** internally to handle 

* General PHP with auto completions for things like curl_setopt constants and return types from array_shift etc.  
* PhpUnit createTestProxy methods etc.
* Possible reflection parameter values.

The meta files can be found by using the keyboard (*Open File->Open File->.phpstorm.meta.php*), open file twice searches 
dependencies including the auto added jetbrains ones as well as project code, or by manually navigating to :-

* External Dependencies->meta->.phpstorm.meta.php
* External Dependencies->meta->phpunit->.phpstorm.meta.php
* External Dependencies->Reflection->.phpstorm.meta.php (surprised this is not under meta so may move)

These give you a range of examples.

## Other examples

Within the project there is an ExampleUsage class which uses TestFactory and ChildFactory to example usage in a way that
can be played with simply. Including an example of masking.

## Notes

I cannot seem to find a way to generate a list of x type from a passed value. E.g. \DomDocument[] from \DomDocument::
class.

You can run **inspect code** and there should be no **Undefined symbols** under **Undefined symbols** in the results.
You can then delete the contents of the **.phpstorm.meta.php** file and see how the results change etc.

