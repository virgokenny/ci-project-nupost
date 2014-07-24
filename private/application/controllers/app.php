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

	public function preview()
	{
		$this->load->helper('file');
		$temp_file = tempnam('nupost', 'nps');
		write_file($temp_file, $this->input->post('rst'));
		echo shell_exec('rst2html -r 5 '.$temp_file);
	}
}

