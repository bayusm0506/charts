<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model(array('Model_all'=>'Model_all'));
		$this->load->library('template');
	}

	public function index(){
		$data['title'] = "Data Anggota";
		$data['anggota'] = $this->Model_all->show_all('anggota')->result();
		$this->template->load('main', 'anggota/index', $data);
	}

	public function tambah(){
		$data['title'] = "Tambah Anggota";
		$this->template->load('main', 'anggota/tambah', $data);
	}

	public function save(){
		$data = array(
		        'nama' => $this->input->post('nama'),
		);

		$tambah = $this->Model_all->tambah('anggota', $data);
		if (count($tambah) > 0) {
			redirect(site_url('anggota'), 'refresh');
		}else{
			redirect(site_url('anggota'), 'refresh');
		}

	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Anggota";
		$data['anggota'] = $this->Model_all->get_by_id('anggota', $id)->row();
		$this->template->load('main', 'anggota/edit', $data);

	}

	public function update(){
		$name = $this->input->post('nama');

		$data = array(
			'nama' => $this->input->post('nama')
		);

		$update = $this->Model_all->edit('anggota', $data, array('id'=>$this->input->post('id')));
		if (count($update) > 0) {
			redirect(site_url('anggota'), 'refresh');
		}else{
			redirect(site_url('anggota'), 'refresh');
		}
	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$delete = $this->Model_all->hapus('anggota', array('id'=>$id));
		if (count($delete) > 0) {
			redirect(site_url('anggota'), 'refresh');
		}else{
			redirect(site_url('anggota'), 'refresh');
		}
	}

	public function charts_morris(){
		$data['title'] = "Charts Morris";
		$data['chart'] = $this->Model_all->get_data();
		$this->template->load('main', 'anggota/charts_morris', $data);
	}

	public function charts_hightcharts(){
		$data['title'] = "Charts Hightcharts";
		$data['chart'] = $this->Model_all->get_data();
		$this->template->load('main', 'anggota/charts_hightcharts', $data);
	}

	public function charts_hightcharts_multiple(){
		$data['title'] = "Charts Hightcharts Multiple Axes";
		$data['chart'] = $this->Model_all->get_data();
		$this->template->load('main', 'anggota/charts_hightcharts_multiple', $data);
	}
}