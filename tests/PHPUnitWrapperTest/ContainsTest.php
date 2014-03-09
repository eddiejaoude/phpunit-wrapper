<?php
namespace EddieJaoude\PHPUnitWrapperTest;

use EddieJaoude\PHPUnitWrapper\Assert;

/**
 * Class ContainsTest
 *
 * @package EddieJaoude\PHPUnitWrapperTest
 */
class ContainsTest extends Assert
{

    /*
     * Example of 'assert' & 'equals'
     */
    public function testContains()
    {
        $this->expectedValue('b')
            ->existsIn(
                array('a', 'b', 'c')
            );
    }

    /*
     * Example of 'assert' & 'equals'
     */
    public function testNotContains()
    {
        $this->expectedValue('b')
            ->notExistsIn(
                array('a', 'c')
            );
    }

    /**
     * Example of 'assert', 'equals' & failure 'message'
     *
     * @throws \Exception
     */
    public function testContainsFailureMessage()
    {
        $message = 'Failed test';

        try {
            $this->expectedValue('b')
                ->setMessage($message)
                ->existsIn(
                    array('a', 'c')
                );
        } catch (\Exception $e) {
            if (!strstr($e->getMessage(), $message)) {
                throw new \Exception('Failure. Message is not outputted.');
            }
        }
    }
}
