<?php

class App extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/main', array(
			'title' => 'Editor',
			'page' => 'editor'
		));
	}

	public function save()
	{
		echo($this->input->post('document'));
	}
}

