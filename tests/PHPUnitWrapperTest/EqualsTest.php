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
        $this->expected('abc')
            ->equals('abc');
    }

    /*
     * Example of 'equals'
     */
    public function testNotEquals()
    {
        $this->expected('abc')
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
            $this->expected('abc')
                ->setMessage($message)
                ->equals('cba');
        } catch (\Exception $e) {
            if (!strstr($e->getMessage(), $message)) {
                throw new \Exception('Failure. Message is not outputted.');
            }
        }
    }
}
