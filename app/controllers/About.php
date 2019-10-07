<?php  
class About extends Controller{
	public function index($nama ='Sandhika', $pekerjaan ='Dosen', $umur = 32){

		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] ='About Me'
		$this->view('templates/header');
	$this->view('about/index', $data);
	$this->view('tempaltes/footer');
	}

	public function page(){
		$data['judul'] = 'pages';
		$this->view('tempaltes/header', $data);
		$this->view('About/page');
		$this->view('tempaltes/footer');
	}
}