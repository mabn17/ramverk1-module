<?php
namespace Anax\Controller;

use Anax\DI\DIFactoryConfig;
use PHPUnit\Framework\TestCase;

/**
 * Test for setting up the Weather controller.
 */
class WeatherControllerUsageTest extends TestCase
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

        $weather = new WeatherController();
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
        $weather = new WeatherController();
        $weather->setDI($this->di);
        $weather->initialize();

        $resp = $weather->locationActionPost();
        $respType = gettype($resp);

        $this->assertEquals('object', $respType);
        $this->assertEquals($this->di->get("response")->redirect("vader"), $resp);
    }
}
