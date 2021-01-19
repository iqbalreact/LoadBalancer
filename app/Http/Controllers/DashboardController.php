<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Psr\Http\Message\ServerRequestInterface;


class DashboardController extends Controller
{
    //

    public function index()
    {
        return view ('dashboard');
    }

    public function getDataServer1()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://100.25.151.115/report.json');
        return $res;
    }

    public function getDataServer2()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://54.237.125.14/report.json');
        return $res;
    }

    public function getDataLB1()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://103.41.205.136/report.json');
        return $res;
    }

    public function getDataLB2()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://103.41.206.116/report.json');
        return $res;
    }

    public function getAll() 
    {
        $server1 = $this->getDataServer1();
        $responseData1 = json_decode($server1->getBody(), true);
        return $responseData['general']['total_requests'];



        $server2 = $this->getDataServer2();
        $responseData2 = json_decode($server1->getBody(), true);


        $lb1 = $this->getDataLB1();
        $lb2 = $this->getDataLB2();
    }



    


}
