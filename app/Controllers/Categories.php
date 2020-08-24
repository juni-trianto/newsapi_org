<?php namespace App\Controllers;

use App\Models\Home_model;

class Categories extends BaseController
{
	public function __construct()
	{
		$this->Home_model = new Home_model();
	}

	public function category()
	{
		$request 			= \Config\Services::request();
		$categori  			=  $request->uri->getSegment(3);
		$data['news']     	= $this->Home_model->category($categori);
		$data['record'] 	= $this->Home_model->topnews();
		$data['title'] 		= $categori;
		echo view('front/templates/header', $data);
		echo view('front/home', $data);
		echo view('front/templates/footer');

    }
    
}