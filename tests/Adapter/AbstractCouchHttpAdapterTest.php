<?php

require_once join(DIRECTORY_SEPARATOR,[dirname(dirname(__DIR__)),'src','autoload.php']);

use PHPOnCouch\Exceptions;
use PHPOnCouch\Adapter\CouchHttpAdapterCurl;

require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), '_config', 'config.php']);

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-11-01 at 15:39:08.
 * 
 */
class AbstractCouchHttpAdapterTest extends PHPUnit_Framework_TestCase {

    protected $adapter;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->adapter = new CouchHttpAdapterCurl([]);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        $this->adapter = null;
    }

    /**
     * @covers PHPOnCouch\Adapter\AbstractCouchHttpAdapter::setDsn()
     * @covers PHPOnCouch\Adapter\AbstractCouchHttpAdapter::getDns()
     */
    public function testDsnAccessors() {
        $adapter = $this->adapter;
        $adapter->setDsn('localhost');
        $this->assertEquals('localhost', $adapter->getDsn());
    }

    /**
     * @covers PHPOnCouch\Adapter\AbstractCouchHttpAdapter::setSessionCookie()
     * @covers PHPOnCouch\Adapter\AbstractCouchHttpAdapter::getSessionCookie()
     * @covers PHPOnCouch\Adapter\AbstractCouchHttpAdapter::hasSessionCookie()
     */
    public function testSessionAccessors() {
        $adapter = $this->adapter;
        $adapter->setSessionCookie("");
        $this->assertEmpty($adapter->getSessionCookie());
        $this->assertFalse($adapter->hasSessionCookie());

        $cookie = "thisisnotreallyacookie";
        $adapter->setSessionCookie($cookie);
        $this->assertEquals($cookie, $adapter->getSessionCookie());
        $this->assertTrue($adapter->hasSessionCookie());
    }

    /**
     * @covers PHPOnCouch\Adapter\AbstractCouchHttpAdapter::getOptions()
     * @covers PHPOnCouch\Adapter\AbstractCouchHttpAdapter::setOptions()
     */
    public function testOptionAccessor() {
        $adapter = $this->adapter;

        $val = null;
        $adapter->setOptions($val);
        $this->assertEquals($val, $adapter->getOptions());
    }

}
