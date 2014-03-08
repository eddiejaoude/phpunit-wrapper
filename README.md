# PHPUnitWrapper / phpunit-wrapper

PHPUnit wrapper - wraps the functionality of phpunit with easy to use `plain & simple English`

---

## Installation via Composer
```
    "require" : {
        "EddieJaoude\PHPUnitWrapper" : "0.*"
    }
```

---

## Examples

Instead of extending `\PHPUnit_Framework_TestCase`, extend `\EddieJaoude\PHPUnitWrapper\Assert`.

The Assert class extends PHPUnit, therefore you get all the previous functionality & your previous unit tests will not fail.

---

### Assert Equals

#### Standard PHPUnit
```PHP
    $this->assertEquals($expected, $actual);

    // or with custom message

    $this->assertEquals($expected, $actual, $message);
```

#### PHPUnit Wrapper
```PHP
    $this->expected('abc')
                ->equals('abc');

    // or with custom message

    $this->expected('abc')
            ->setMessage('Failure, these are not equal!') // optional
            ->equals('abc');
```

### Assert NOT Equals

#### Standard PHPUnit
```PHP
    $this->assertNotEquals($expected, $actual, $message);
```

#### PHPUnit Wrapper
```PHP
    $this->expected('abc')
            ->notEquals('abcd');
```

---

### Contains

#### Standard PHPUnit
```PHP
    $this->assertContains($needle, $haystack);

    // or with custom message

    $this->assertContains($needle, $haystack, $message);
```

#### PHPUnit Wrapper
```PHP
    $this->value($needle)
            ->exists($haystack);

    $this->value('b')
            ->exists(
                array('a', 'b', 'c')
            );

    // or with custom message

    $this->value('b')
            ->setMessage('Failure, does not exist!') // optional
            ->exists(
                array('a', 'b', 'c')
            );
```

### NOT Contains

#### Standard PHPUnit
```PHP
    $this->assertNotContains($needle, $haystack);

    // or with custom message

    $this->assertNotContains($needle, $haystack, $message);
```

#### PHPUnit Wrapper
```PHP
    $this->value($needle)
            ->notExists($haystack);

    $this->value('b')
            ->notExists(
                array('a', 'c')
            );

    // or with custom message

    $this->value('b')
            ->setMessage('Failure, does exist!') // optional
            ->notExists(
                array('a', 'c')
            );
```

---



---

### Complete usage simple Example

```PHP
<?php
namespace EddieJaoude\PHPUnitWrapperTest;

use EddieJaoude\PHPUnitWrapper\Assert;

/**
 * Class ExampleTest
 *
 * @package EddieJaoude\PHPUnitWrapperTest
 */
class ExampleTest extends Assert
{

    /*
     * Example of 'assert' & 'equals'
     */
    public function testAssertEquals()
    {
        $this->expected('abc')
            ->equals('abc');
    }

    /*
     * Example of 'assert' & 'equals'
     */
    public function testAssertNotEquals()
    {
        $this->expected('abc')
            ->notEquals('abcd');
    }
}

```

