<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {



	function __construct()
		{
			parent::__construct();
			$this->load->model('M_sewa');
			$this->load->helper('url');
		}
	public function index()
	{
		$this->load->view('home');
	}
	public function reservasi()
	{
		if($this->session->userdata('status') != "login_user"){
			redirect(base_url("home/login"));
		}else{
			$this->load->view('reservasi');
		}
		
	}
	public function daftaradmin()
	{
		if($this->session->userdata('status') != "login_user"){
			redirect(base_url("home/login"));
		}else{
			$data['user'] = $this->M_sewa->tampil_admin()->result();
			$this->load->view('daftaradmin',$data);
		}
		
	}
	public function tambahadmin()
	{
		if($this->session->userdata('role') == 1){
			$this->load->view('tambah_admin');
		}else{
			redirect(base_url("home/login"));
		}
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function detail()
	{
		$this->load->view('detail');
	}
	public function jadwalbooking()
	{
		$this->load->view('jadwalbooking');
	}
	public function jadwal()
	{
		if($this->session->userdata('status') != "login_user"){
			redirect(base_url("home/login"));
		}else{
			$data['reservasi'] = $this->M_sewa->tampil_data()->result();
			$this->load->view('jadwal',$data);
		}
	}
}
