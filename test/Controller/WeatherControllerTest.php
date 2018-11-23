<?php
namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;
/**
 * Test for setting up the.
 */
class WeatherControllerTest extends TestCase
{
    /**
     * Setup before each testcase
     */
    public function setUp()
    {
        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");
        $this->di->loadServices(ANAX_INSTALL_PATH . "/test/config/di");
    }
    /**
     * Create an object.
     */
    public function testCreate()
    {
        // Create using new
        $rem = new WeatherController();
        $this->assertInstanceOf("Anax\Controller\WeatherController", $rem);
        // Inject needed
        $obj = $rem->setDI($this->di);
        $this->assertEquals($rem, $obj);
        // Initialize
        $rem->initialize();
    }
}

