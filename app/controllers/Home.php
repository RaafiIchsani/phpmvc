<?php 


 class Home extends Controller{
 	public function index(){
 		$data['judul']= 'Home';
 		$data['nama'] = $this->model('User_model')->getUser();
 		$this->view('templates/header', $data);
 		$this->views( 'home/index' $data);
 		$this->view('templates/footer');

 	}
 }