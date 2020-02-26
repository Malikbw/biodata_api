<?php 

 class web extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent:: __construct();
 	}
 	
 	function index()
 	{
 		$data['judul']="parsing data ke view";
 		$data['isi']="ini data dari controller";
 		$this->load->view('hello',$data);
 	}
 	// function index()
 	// {
 	// 	$this->load->view('hello');
 	// }
 	// function komentar()
 	// {
 	// 	echo "ini adalah fungsi komentar";
 	// }
 	// function nama()
 	// {
 	// 	echo "malik";
 	// }

 }

?>