<?php

class App extends CI_Controller
{
	public function index()
	{
		$this->load->view('editor');
	}

	public function save()
	{
		echo($this->input->post('document'));
	}
}

