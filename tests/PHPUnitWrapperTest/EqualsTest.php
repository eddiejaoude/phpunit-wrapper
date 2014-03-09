<?php
namespace EddieJaoude\PHPUnitWrapperTest;

use EddieJaoude\PHPUnitWrapper\Assert;

/**
 * Class EqualsTest
 *
 * @package EddieJaoude\PHPUnitWrapperTest
 */
class EqualsTest extends Assert
{

    /*
     * Example of 'equals'
     */
    public function testEquals()
    {
        $this->expectedValue('abc')
            ->equals('abc');
    }

    /*
     * Example of 'equals'
     */
    public function testNotEquals()
    {
        $this->expectedValue('abc')
            ->notEquals('abcd');
    }

    /**
     * Example of 'equals' & 'failure message'
     *
     * @throws \Exception
     */
    public function testEqualsFailureMessage()
    {
        $message = 'Failed test';

        try {
            $this->expectedValue('abc')
                ->setMessage($message)
                ->equals('cba');
        } catch (\Exception $e) {
            if (!strstr($e->getMessage(), $message)) {
                throw new \Exception('Failure. Message is not outputted.');
            }
        }
    }
}
