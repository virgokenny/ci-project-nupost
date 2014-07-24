<?php

class App extends CI_Controller
{
	const REPO_ROOT = 'private/repo/';

	public function save($book, $doc)
	{
		$this->load->helper('file');
		// $this->output->set_header('Access-Control-Allow-Origin: *');
		write_file(App::REPO_ROOT."${book}/${doc}", $this->input->post('document'));
	}
}

