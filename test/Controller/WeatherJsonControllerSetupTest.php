<?php
namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test for setting up the Weather controller.
 */
class WeatherJsonControllerTest extends TestCase
{
    /**
     * @var Anax\DI\DIFactoryConfig            $di
     */
    private $di;

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
        $weatherJson = new WeatherJsonController();
        $this->assertInstanceOf("Anax\Controller\WeatherJsonController", $weatherJson);
        // Inject needed
        $obj = $weatherJson->setDI($this->di);
        $this->assertEquals($weatherJson, $obj);
        // Initialize
        $weatherJson->initialize();
    }
}
