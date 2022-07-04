<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestLogAPI extends Controller
{
    //
    public function index()
    {
        $client = new Client();
        $result = $client->get('')


    }
}
