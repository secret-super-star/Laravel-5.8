<?php

namespace App\Http\Controllers;

use Spatie\Geocoder\Facades\Geocoder;
use Midnite81\GeoLocation\Contracts\Services\GeoLocation;
use Illuminate\Http\Request;

class CheckIpController extends Controller
{
    //
    public function index(GeoLocation $geo,Request $request){
        $ipLocation = $geo->getCity($request->ip());
        dump($ipLocation);
    }
}
