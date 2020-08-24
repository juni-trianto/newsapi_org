<?php

namespace App\Controllers;

use App\Models\Home_model;

class Search extends BaseController
{
    public function __construct()
    {
        $this->Home_model = new Home_model();
    }

    public function searching()
    {
        $keywoard = url_title($this->request->getPost('search'), '-', TRUE);
        return redirect()->to(base_url('Search/q?key=' . $keywoard));
    }

    public function q()
    {
        $keywoard              =  $this->request->getGet('key');
        $data['news']          = $this->Home_model->search($keywoard);
        $data['record']        = $this->Home_model->topnews();
        $data['title']         = $keywoard;
        echo view('front/templates/header', $data);
        echo view('front/home', $data);
        echo view('front/templates/footer');
    }
}
