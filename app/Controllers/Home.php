<?php namespace App\Controllers;

use App\Models\Home_model;

class Home extends BaseController
{
	public function __construct()
	{
		$this->Home_model = new Home_model();
	}
	public function index()
	{
		
		$data['record'] = $this->Home_model->topnews();
		$data['news'] = $this->Home_model->allNews();
		$data['title'] = 'Home';
		echo view('front/templates/header', $data);
		echo view('front/home', $data);
		echo view('front/templates/footer');
	}


	

}
