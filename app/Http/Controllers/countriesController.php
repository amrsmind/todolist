<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Unirest\Request;
use function GuzzleHttp\json_encode;

class countriesController extends Controller
{
    //
    public function index(){
        $response = Request::get("https://restcountries-v1.p.rapidapi.com/all",
        array(
          "X-RapidAPI-Host" => "restcountries-v1.p.rapidapi.com",
          "X-RapidAPI-Key" => "19cddc8d82msh110e6c56625d8fap1bfcb5jsn538e238f8896"
        )
      );
      ///

      $body = $response->body;

      $bodyarr = json_decode(json_encode($body), True);

      //return $body;

      usort($bodyarr, function($a, $b) {
        return $a['name'] <=> $b['name'];
    });

    $bodyjson = json_encode($bodyarr);


       return $bodyjson;

    }
}
