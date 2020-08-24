<?php

namespace App\Controllers;

use App\Models\Home_model;

class Articles extends BaseController
{
    public function __construct()
    {
        $this->Home_model = new Home_model();
    }

    public function detail()
    {
        $data['data']          = $this->request->getGet('data');
        $data['record']        = $this->Home_model->topnews();
        $data['title']         = 'Detail Berita';
        echo view('front/templates/header', $data);
        echo view('front/detailArticles', $data);
        echo view('front/templates/footer');
    }
}
