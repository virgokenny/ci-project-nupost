<?php

class App extends CI_Controller
{
	const REPO_ROOT = 'private/repo/';
	const BOOK_URL = 'book/';

	public function save($book, $docurl)
	{
		$this->load->helper('file');
		// $this->output->set_header('Access-Control-Allow-Origin: *');
		$doc = urldecode($docurl);
		var_dump(App::REPO_ROOT."${book}/${doc}");
		write_file(App::REPO_ROOT."${book}/${doc}", $this->input->post('document'));
	}

	public function preview()
	{
		$this->load->helper('file');
		$temp_file = tempnam('nupost', 'nps');
		write_file($temp_file, $this->input->post('rst'));
		echo shell_exec('rst2html -r 5 '.$temp_file);
	}

	public function git_stage_area($book)
	{
		$this->load->helper('file');
		$dir = App::REPO_ROOT."${book}";
		echo shell_exec('cd '.$dir.'; git status');
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

		$findme = ".rst";
		$result = strpos($file_path, $findme);

		$path_parts = pathinfo($file_path);

		if (!is_dir($path_parts['dirname']))
		{
			mkdir($path_parts['dirname']);
		}

		var_dump($result);
		if ($result)
		{
			write_file($file_path, "");
		}
		redirect(App::BOOK_URL."${book}");
	}

	public function deletefile($book)
	{
		$this->load->helper('file');
		$this->load->helper('url');
		$file_list = $this->input->post('file_list');
		$book_path = App::REPO_ROOT."${book}";

		foreach ($file_list as $file_name):
			$file_path = "{$book_path}"."/"."${file_name}";
			unlink($file_path);
		endforeach;
		redirect(App::BOOK_URL."${book}");
	}
}

