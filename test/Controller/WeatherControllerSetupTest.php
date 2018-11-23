<?php
namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test for setting up the Weather controller.
 */
class WeatherControllerSetupTest extends TestCase
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
        global $di;

        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");
        $this->di->loadServices(ANAX_INSTALL_PATH . "/test/config/di");

        $di = $this->di;
    }

    /**
     * Create an object.
     */
    public function testCreate()
    {
        // Create using new
        $weather = new WeatherController();
        $this->assertInstanceOf("Anax\Controller\WeatherController", $weather);
        // Inject needed
        $obj = $weather->setDI($this->di);
        $this->assertEquals($weather, $obj);
        // Initialize
        $weather->initialize();
    }
}
