<?php

	class Home extends CI_Controller
	{
		public function index()
		{
			//echo 'Home Page'; //Teste
			$this->load->view('home/inc/header_view');
			$this->load->view('home/inc/footer_view');
			$this->load->view('/home/home_view');

		}
	}

?>