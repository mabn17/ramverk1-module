<?php
namespace Anax\Weather;

use PHPUnit\Framework\TestCase;

/**
 * Test for setting up the WeatherJson Model.
 */
class ModelTest extends TestCase
{   
    /**
     * Testing Model classes
     */
    public function testWeatherJson()
    {
        $model = new WeatherJsonModel();

        $this->assertEquals(gettype($model->getAllData('karlskrona', 1)), 'array');
        $this->assertEquals(gettype($model->getAllData('karlskrona', 0)), 'array');
    }
}
