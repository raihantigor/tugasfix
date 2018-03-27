<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proses_login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function ci_login(){
		$nama = $this->input->post('nama');
		$nrp = $this->input->post('nrp');

		$cek_method = $this->m_login->cek_user($nama , $nrp);
		if ($cek_method == true) {
			$this->load->view('tampil');
		}
		else {
			$this->load->view('login_v');
		}



	}

}

// include("config/config.php");



// session_start();
// ob_start();

// $nama = $_POST['nama'];
// $nrp = $_POST['nrp'];
// $sql = "select * from users where nama='".$nama."' and nrp='".$nrp."'";

// $hasil = mysqli_query($mysqli,$sql);


// if ($hasil) {
// 	$row = mysqli_num_rows($hasil);
// 	if($row){
// 		$_SESSION['email_aja'] = $nama;
// 		header("location: " . "tampil.php");
// 	}
// }
