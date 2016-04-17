<?php
namespace SSENSE\HiringTest\Models;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SSENSE\HiringTest\Models\ForecastIO;

class Weather
{
    const mtlLatitude = '45.30';
    const mtlLongitude = '73.35';
    const apiKey = 'e60efe99b1bf9036ce9a154a5c1c10ee';
    const units = 'auto';
    const lang = 'en';
    
    private $api;
    
    /**
     * Create a new instance
     *
     * @param $app
     */
    function __construct($app)
    {

        $this->apiKey = $app['predis'];
        /*$this->apiKey = self::apiKey;
        $this->units = self::units;
        $this->lang = self::lang;*/

    }
    
    public function getMtlWeatherForWeak()
    {
        
        $forecast = new ForecastIO(self::apiKey, self::units, self::lang);
        
        /*
         * GET DAILY CONDITIONS FOR NEXT 7 DAYS
         */
        $conditions = $forecast->getForecastWeek(self::mtlLatitude, self::mtlLongitude);
        if(!$conditions){
            throw new NotFoundHttpException(sprintf('Cannot provide conditions for next 7 days'));
        }
        
        //return array();//$this->apiKey->monitor();    
        return $conditions;
    }
}