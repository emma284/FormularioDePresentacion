<?php

namespace AppBundle\Controller;

//use Geocoder\Provider\Provider;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Geocoder\Provider\BingMapsProvider;

use Geocoder\Query\GeocodeQuery;
use Geocoder\Query\ReverseQuery;


use \Geocoder\Provider\GoogleMaps\GoogleMaps;
use \Geocoder\Provider\BingMaps\BingMaps;
use Http\Client\Curl\Client;

use GuzzleHttp\Client as GuzzleClient;

class Geolocalizador
{



//    private $bingMapsGeocoder;
//
//    public function __construct(Provider $bingMapsGeocoder)
//    {
//        $this->bingMapsGeocoder = $bingMapsGeocoder;
//    }
    
    /**
     * @Route("/geolocalizador/", name="geolocalizador")
     */
   public function indexAction(Request $request)
   {
       // Retrieve information from the current user (by its IP address)
       $result = $this->container
           ->get('bazinga_geocoder.provider.acme')
           ->geocodeQuery(GeocodeQuery::create($request->server->get('REMOTE_ADDR')));

       // Find the 5 nearest objects (15km) from the current user.
       $coords = $result->first()->getCoordinates();
       $objects = ObjectQuery::create()
           ->filterByDistanceFrom($coords->getLatitude(), $coords->getLongitude(), 15)
           ->limit(5)
           ->find();

       return array(
           'geocoded'        => $result,
           'nearest_objects' => $objects
       );
   }
   
   /**
     * @Route("/geo/", name="geo")
     */
    public function geoAction(Request $request)
    {
        $config = [
            'verify' => false,
            'proxy' => '10.10.254.219:3128',
        ];
        $guzzle = new GuzzleClient($config);
        
        $httpClient = new \Http\Adapter\Guzzle6\Client($guzzle);
        $provider = new \Geocoder\Provider\BingMaps\BingMaps($httpClient, 'AoeF5KZxTC6xLMppl6gsUGs3xGHVkqgXFJs-pAqih5kygARAbdITdO5KJDR85ohV');
        $geocoder = new \Geocoder\StatefulGeocoder($provider, 'en');

        $result = $geocoder->geocodeQuery(GeocodeQuery::create('London'));

        var_export($result);
    }
}

