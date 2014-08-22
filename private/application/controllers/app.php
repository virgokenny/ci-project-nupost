<?php

class App extends CI_Controller
{
	const REPO_ROOT = 'private/repo/';
	const BOOK_URL = 'book/';

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

	public function download($book)
	{
		$this->load->helper('file');
		$this->load->helper('download');
		$file_name = App::REPO_ROOT."${book}/_build/pdf/${book}.pdf";
		force_download("${book}.pdf", read_file($file_name));
	}

	public function newfile($book)
	{
		$this->load->helper('file');
		$this->load->helper('url');
		$book_path = App::REPO_ROOT."${book}";
		$file_path = "{$book_path}"."/".$this->input->post('input_text_field');
		$output =  write_file($file_path, "");
		redirect(App::BOOK_URL."${book}");
	}
}

