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
     * @param mixed $data
     *
     * @return Assert
     */
    public function existsIn($data)
    {
        $this->assertContains($this->expectedValue, $data, $this->message);

        return $this;
    }

    /**
     * @param mixed $data
     *
     * @return Assert
     */
    public function notExistsIn($data)
    {
        $this->assertNotContains($this->expectedValue, $data, $this->message);

        return $this;
    }
}
