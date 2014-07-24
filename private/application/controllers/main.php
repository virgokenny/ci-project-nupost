<?php

class Main extends CI_Controller
{
	const REPO_ROOT = 'private/repo/';

	public function index()
	{
		$this->load->helper('file');
		$this->load->view('layout/main', array(
			'title' => 'Browser',
			'page' => 'browser',
			'repo_list' => get_dir_file_info(Main::REPO_ROOT)
		));
	}

	public function book($name)
	{
		$this->load->helper('file');
		$this->load->view('layout/main', array(
			'title' => $name,
			'page' => 'book',
			'doc_list' => get_filenames(Main::REPO_ROOT.$name)
		));
	}

	public function doc($book, $doc)
	{
		$this->load->helper('file');
		$this->load->view('layout/main', array(
			'title' => $doc,
			'page' => 'editor',
			'book' => $book,
			'document' => read_file(Main::REPO_ROOT.$book.'/'.$doc),
			'css_list' => array('codemirror'),
			'js_list' => array('codemirror', 'overlay', 'rst', 'editor')
		));
	}
}

