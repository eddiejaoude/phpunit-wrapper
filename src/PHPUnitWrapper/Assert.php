<?php
namespace EddieJaoude\PHPUnitWrapper;

use PHPUnit_Framework_TestCase;

/**
 * Class Assert
 *
 * @package EddieJaoude\PHPUnitWrapper
 */
class Assert extends PHPUnit_Framework_TestCase
{

    /**
     * Trait for Equals
     * Including Not Equals
     */
    use Equals;

    /**
     * Trait for Contains
     * Including Not Contains
     */
    use Contains;

    /**
     * @var mixed
     */
    private $expectedValue;

    /**
     * @var mixed
     */
    private $equals;

    /**
     * @var mixed
     */
    private $message;

    /**
     * @param mixed $data
     *
     * @return Assert
     */
    public function expectedValue($data)
    {
        $this->expectedValue = $data;

        return $this;
    }

    /**
     * @param mixed $data
     *
     * @return Assert
     */
    public function setMessage($data)
    {
        $this->message = $data;

        return $this;
    }
}
