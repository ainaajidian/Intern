<?php 

namespace Aina\Provider;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

    /**
    an Example of class HelloProvider. 
    @package    Aina
    @subpackage Provider
    @author     Aina Aji Dian <ainaajidian@gmail.com>
    */

class HelloProvider implements ControllerProviderInterface {

    public function connect(Application $app) 
    {
        $hello = $app["controllers_factory"];
        $hello->get("/", "Aina\\Controller\\HelloController::index");
        $hello->get("/", "Aina\\Controller\\HelloController::hai");
        $hello->get("/", "Aina\\Controller\\HelloController::kabar");
        $hello->get("/", "Aina\\Controller\\HelloController::dimana");
        $hello->get("/", "Aina\\Controller\\HelloController::siapa");

        return $hello;   
    }
}