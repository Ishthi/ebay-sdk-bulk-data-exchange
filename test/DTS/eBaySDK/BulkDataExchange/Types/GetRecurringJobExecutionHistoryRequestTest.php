<?php

use DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest;

class GetRecurringJobExecutionHistoryRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetRecurringJobExecutionHistoryRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}