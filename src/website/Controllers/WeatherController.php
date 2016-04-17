<?php
namespace SSENSE\HiringTest\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use SSENSE\HiringTest\Models\Weather;

class WeatherController
{
    /**
     * Display the upcoming weather for Montreal, for the next 7 days
     * 
     * @param Application $app
     * @param Request $request 
     */
    public function mtlWeatherAction(Application $app, Request $request)
    {
        $weather = new Weather($app);
        $conditions = $weather->getMtlWeatherForWeak();
        
        // Render the page
        return $app['twig']->render('weather/display.html', ['days' => $conditions]);
    }
}
