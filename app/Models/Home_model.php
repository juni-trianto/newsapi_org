<?php

namespace App\Models;

use CodeIgniter\Model;

class Home_model extends model
{ 
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest();
        $this->api       = 'apiKey=24a50dca8bb54b988b4b05c9e758eac3';
    }

 

    public function topnews()
    {

        $response =  $this->client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&pageSize=6&' . $this->api . '');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function allNews()
    {

        $response =  $this->client->request('GET', 'https://newsapi.org/v2/everything?q=bitcoin&pageSize=6&'.$this->api.'');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function category($categori)
    {
        $response =  $this->client->request('GET', 'https://newsapi.org/v2/top-headlines?country=us&country=id&'.$this->api.'&category='.$categori. '&pageSize=10');
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    public function search($keywoard)
    {
        $response =  $this->client->request('GET', 'https://newsapi.org/v2/everything?q='.$keywoard. '&pageSize=8&' . $this->api . '');
        $result = json_decode($response->getBody(), true);
        return $result;
    }




 
}
