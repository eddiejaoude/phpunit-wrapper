<?php
namespace EddieJaoude\PHPUnitWrapper;

/**
 * Class Equals
 *
 * @package EddieJaoude\PHPUnitWrapper
 */
trait Equals
{

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
