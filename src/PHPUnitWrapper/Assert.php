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
     * @param mixed $data
     *
     * @return Assert
     */
    public function expected($data)
    {
        $this->expected = $data;

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

    /**
     * @param mixed $data
     *
     * @return Assert
     */
    public function equals($data)
    {
        $this->assertEquals($this->expected, $data, $this->message);

        return $this;
    }

    /**
     * @param mixed $data
     *
     * @return Assert
     */
    public function notEquals($data)
    {
        $this->assertNotEquals($this->expected, $data, $this->message);

        return $this;
    }
}
