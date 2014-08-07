<?php

use DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse;

class GetRecurringJobExecutionStatusResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetRecurringJobExecutionStatusResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }
}
