<?php
namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test for setting up the Weather controller.
 */
class WeatherJsonControllerUsageTest extends TestCase
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
        /* global $di; */

        $this->di = new DIFactoryConfig();
        $this->di->loadServices(ANAX_INSTALL_PATH . "/config/di");
        $this->di->loadServices(ANAX_INSTALL_PATH . "/test/config/di");

        /* $di = $this->di; */
    }

    /**
     * Index page
     */
    public function testIndexAction()
    {

        $weather = new WeatherJsonController();
        $weather->setDI($this->di);

        $resp = $weather->indexAction();
        $respType = gettype($resp);

        $this->assertEquals('object', $respType);
    }

    /**
     * Handles data after Post
     */
    public function testLocationActionPost()
    {
        $weather = new WeatherJsonController();
        $weather->setDI($this->di);
        $weather->initialize();

        $resp = $weather->forecastActionGet();
        $respType = gettype($resp);
        $pos = "";

        $this->assertEquals('array', $respType);
        $this->assertEquals(["message" => "Could not find any data from $pos"], $resp[0]);
    }
}
