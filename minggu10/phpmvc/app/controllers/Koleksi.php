<?php

class Koleksi extends Controller {
    public function index()
	{
	    $data['judul'] = 'Koleksi Buku';
		$data['bku'] = $this->model('Koleksi_model')->getAllBuku();
	    $this->view('templates/header', $data);
		$this->view('koleksi/index', $data);
	    $this->view('templates/footer');
	}
}