<?php
class Hitung extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
	}

	function index() {
		$this->load->view('menu_hitung');
	}

	function perkalian() {
		$data['judul']="perkalian dengan form";
		$data['angka1']=(int)$this->input->post('angka1',true);
		$data['angka2']=(int)$this->input->post('angka2',true);
		$data['hasil']=$data['angka1']*$data['angka2'];
		$this->load->view('perkalian',$data);
	}

	function pembagian() {
		$data['judulbagi']="pembagian dengan form";
		$data['angka1']=(int)$this->input->post('angka1',true);
		$data['angka2']=(int)$this->input->post('angka2',true);
		if ($data['angka2']>0){
			$data['hasil']=$data['angka1']/$data['angka2'];
		}else{
			$data['hasil']='error ,angka tidak boleh 0';
		}
		$this->load->view('pembagian',$data);
	}
}


?>