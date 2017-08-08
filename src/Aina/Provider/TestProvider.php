<?php 

namespace Aina\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

    /**
    an Example of class TestProvider. 
    @package    Aina
    @subpackage Provider
    @author     Aina Aji Dian <ainaajidian@gmail.com>
    */

class TestProvider implements ControllerProviderInterface {

    public function connect(Application $app) 
    {
        $test = $app["controllers_factory"];
        $test->get("/", "Aina\\Controller\\HelloController::coba");
        $test->get("/", "Aina\\Controller\\HelloController::test");
        $test->get("/", "Aina\\Controller\\HelloController::belajar");
        $test->get("/", "Aina\\Controller\\HelloController::check");
        $test->get("/", "Aina\\Controller\\HelloController::apigen");

        return $test;   
    }
}