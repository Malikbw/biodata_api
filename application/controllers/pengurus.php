<?php 

class Pengurus extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model("model_pengurus");
	}

	function index() 
	{
		$data['judul']="Tambah data";
		$data['isi']="CURD data pengurus";
		$data['data']=$this->model_pengurus->get();
		$this->load->view("view_pengurus",$data);
	}

	function addpengurus()
	{
		$id=$this->input->post('id',true);
		$nama=$this->input->post('nama',true);
		$gender=$this->input->post('gender',true);
		$alamat=$this->input->post('alamat',true);
		$gaji=$this->input->post('gaji',true);
		$this->model_pengurus->simpan($id,$nama,$gender,$alamat,$gaji);
		redirect('pengurus');
	}

	function edit() 
	{
		$data['judul']="database dalam ci";
		$data['isi']="edit data pengurus";
		$id=$this->uri->segment(3);
		$data['data']=$this->model_pengurus->edit($id);
		$this->load->view("edit_pengurus",$data);
	}

	function edit_submit() 
	{
		$id=$this->input->post('id',true);
		$nama=$this->input->post('nama',true);
		$gender=$this->input->post('gender',true);
		$alamat=$this->input->post('alamat',true);
		$gaji=$this->input->post('gaji',true);
		$this->model_pengurus->update($id,$nama,$gender,$alamat,$gaji);
		redirect('pengurus');
	}

	function delete()
	{
		$id=$this->uri->segment(3);
		$this->model_pengurus->delete($id);
		redirect('pengurus');
	}


}






?>