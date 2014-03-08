<?php
namespace EddieJaoude\PHPUnitWrapper;

/**
 * Class Contains
 *
 * @package EddieJaoude\PHPUnitWrapper
 */
trait Contains
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
    public function value($data)
    {
        $this->expected = $data;

        return $this;
    }

    /**
     * @param mixed $data
     *
     * @return Assert
     */
    public function exists($data)
    {
        $this->assertContains($this->expected, $data, $this->message);

        return $this;
    }

    /**
     * @param mixed $data
     *
     * @return Assert
     */
    public function notExists($data)
    {
        $this->assertNotContains($this->expected, $data, $this->message);

        return $this;
    }
}
