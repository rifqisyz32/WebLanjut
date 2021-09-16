<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		return view('welcome_message');
	}
	
	public function show(){
		$data['nama'] = 'Rifqi Syamsu Z';
		$data['jurusan'] = 'Ilmu Komputer';
		echo view("mahasiswa/index", $data);
		echo view("mahasiswa/header");
		echo view("mahasiswa/footer");
	}
}
