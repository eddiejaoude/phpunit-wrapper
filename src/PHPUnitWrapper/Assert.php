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
     * @var mixed
     */
    private $expected;

    /**
     * @var mixed
     */
    private $equals;

    /**
     * @var mixed
     */
    private $message;

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
