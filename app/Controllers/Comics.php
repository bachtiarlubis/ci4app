<?php

namespace App\Controllers;

// Namespace dari Models/ComicModel.php
use \App\Models\ComicModel;

class Comics extends BaseController
{
	protected $comicModel;
	public function __construct()
	{
		$this->comicModel = new ComicModel();
	}
	public function index()
	{
		// $comicModel = new \App\Models\ComicModel();
		// $comicModel = new ComicModel();
		// $comic = $this->comicModel->findAll();

		$data = [
			'title' => 'Comics | Bachtiar Muhammad Lubis',
			'comic' => $this->comicModel->getComic('slug')
		];
		return view('comics/index', $data);
	}

	public function detail($slug)
	{
		$data = [
			'title' => 'Detail | Bachtiar Muhammad Lubis',
			'comic' => $this->comicModel->getComic('slug', $slug)
		];

		// jika komik tidak ada di tabel
		if (empty($data["comic"])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Comic\'s title ' . $slug . ' is not found');
		}
		return view('comics/detail', $data);
	}

	public function create()
	{
		session(); // untuk tujuan mengambil data validation di session
		$data = [
			'title' => 'Tambah | Bachtiar Muhammad Lubis',
			'validation' => \Config\Services::validation()
		];

		return view('comics/create', $data);
	}

	public function save()
	{
		// Input Validation
		if (!$this->validate([
			'judul' => [
				'rules' => 'required|is_unique[comic.judul]',
				'errors' => [
					'required' => '{field} komik harus diisi',
					'is_unique' => '{field} komik sudah terdaftar'
				]

			]
		])) {
			$validation = \Config\Services::validation();
			// dd($validation);
			return redirect()->to('/comics/create')->withInput()->with('validation', $validation);
		}

		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->comicModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul')
		]);

		// Set Flash Data Untuk Ditampilkan di View
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

		return redirect()->to('/comics');
	}
	//--------------------------------------------------------------------

}
