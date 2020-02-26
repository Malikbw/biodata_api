<?php 

class Biodata extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function index()
 	{
 		$data['judultab']="profil saya";
 		$data['judul']="BIODATA MALIK";

 		$data['nama']="Nama";
 		$data['namasaya']="Malikk Wibowo";

 		$data['alamat']="Alamat";
 		$data['alamatsaya']="Desa Sambirejo";

 		$data['jenis']="Jenis Kelamin";
 		$data['jenissaya']="L";

 		$data['asal']="Asal Sekolah";
 		$data['asalsaya']="SDN Sambirejo";

 		$this->load->view('profil',$data);
 	}
}





?>