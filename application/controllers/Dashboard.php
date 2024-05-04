<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
        $this->load->view('template/footer');
        

	}

	public function daftar()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pendaftaran');
        $this->load->view('template/footer');
        

	}

	public function tambah_pasien()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'umur' => $this->input->post('umur'),
			'jk' => $this->input->post('gender'),
			'kategori' => $this->input->post('kategori'),
			'no_bpjs' => $this->input->post('no_bpjs'),
			'no_hp' => $this->input->post('no_hp'),
			'riwayat_penyakit' => $this->input->post('riwayat')
		);

		$this->load->model('M_pasien');
		$this->M_pasien->create($data);
		redirect(base_url('Dashboard/daftar'));
	}

	public function tampil_data()
	{
		
		$this->load->model('M_pasien');
		$data['daftar']= $this->M_pasien->read();
		$this->load->view('pendaftaran', $data);
		
	}




	

	



}

