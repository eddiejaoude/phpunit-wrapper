# phpunit-wrapper

PHPUnit wrapper - wraps the functionality of phpunit with easy to use plain English

## Installation



## Examples

Instead of extending ```\PHPUnit_Framework_TestCase```, extend ```\EddieJaoude\PHPUnitWrapper\Assert```.

The Assert class extends PHPUnit, therefore you get all the previous functionality & your previous unit tests will not fail.

### Assert Equals

```PHP
    $this->assertEquals($expected, $actual);

    // or

    $this->assertEquals($expected, $actual, $message);
```

```PHP
    $this->expected('abc')
                ->equals('abc');

    // or

    $this->expected('abc')
            ->setMessage('Failure, these are not equal!') // optional
            ->equals('abc');
```

### Assert NOT Equals

```PHP
    $this->assertNotEquals($expected, $actual, $message);
```

```PHP
    $this->expected('abc')
            ->notEquals('abcd');
```



