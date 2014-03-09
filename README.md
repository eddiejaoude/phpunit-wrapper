[![Build Status](https://travis-ci.org/eddiejaoude/phpunit-wrapper.png)](https://travis-ci.org/eddiejaoude/phpunit-wrapper)
[![Coverage Status](https://coveralls.io/repos/eddiejaoude/phpunit-wrapper/badge.png?branch=master)](https://coveralls.io/r/eddiejaoude/phpunit-wrapper?branch=master)
[![Total Downloads](https://poser.pugx.org/eddiejaoude/phpunit-wrapper/downloads.png)](https://packagist.org/packages/eddiejaoude/phpunit-wrapper)


# PHPUnitWrapper / phpunit-wrapper

PHPUnit wrapper - wraps the functionality of phpunit with easy to use `plain & simple English`

`Note: Your existing standard PHPUnit tests will not fail, they will continue to work fine`

---

## Installation via Composer
```
    "require" : {
        "EddieJaoude\PHPUnitWrapper" : "0.*"
    }
```

---

## Usage

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
    $this->expectedValue('abc')
                ->equals('abc');

    // or with custom message

    $this->expectedValue('abc')
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
    $this->expectedValue('abc')
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
    $this->expectedValue($needle)
            ->existsIn($haystack);

    $this->expectedValue('b')
            ->existsIn(
                array('a', 'b', 'c')
            );

    // or with custom message

    $this->expectedValue('b')
            ->setMessage('Failure, does not exist!') // optional
            ->existsIn(
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
    $this->expectedValue($needle)
            ->notExistsIn($haystack);

    $this->expectedValue('b')
            ->notExistsIn(
                array('a', 'c')
            );

    // or with custom message

    $this->expectedValue('b')
            ->setMessage('Failure, does exist!') // optional
            ->notExistsIn(
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
        $this->expectedValue('abc')
            ->equals('abc');
    }

    /*
     * Example of 'assert' & 'equals'
     */
    public function testAssertNotEquals()
    {
        $this->expectedValue('abc')
            ->notEquals('abcd');
    }
}

```

---

### Contribution

Fork, Pull Request - with `Tests` & `Updated README with examples` please

---

### Suggestions / Ideas

Please create an `Issue`


