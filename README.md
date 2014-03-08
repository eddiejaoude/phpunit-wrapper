# phpunit-wrapper

PHPUnit wrapper - wraps the functionality of phpunit with easy to use plain English

## Installation



## Example

Instead of extending ```\PHPUnit_Framework_TestCase```, extend ```\EddieJaoude\PHPUnitWrapper\Assert```.

The Assert class extends PHPUnit, therefore you get all the previous functionality & your previous unit tests will not fail.

```PHP
    $this->assertEquals($expected, $actual, $message);
```

```PHP
    $this->expected('abc')
            ->equals('abc');
```

