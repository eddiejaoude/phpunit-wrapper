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
        $this->expected('abc')
            ->equals('abc');
    }

    /*
     * Example of 'assert' & 'equals'
     */
    public function testAssertNotEquals()
    {
        $this->expected('abc')
            ->notEquals('abcd');
    }

    /**
     * Example of 'assert', 'equals' & failure 'message'
     *
     * @throws \Exception
     */
    public function testAssertEqualsFailureMessage()
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
