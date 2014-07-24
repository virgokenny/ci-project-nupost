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

	public function filterFile($var)
	{
		$findme = ".rst";
		$result = strpos($var, $findme);
		return $result !== false;
	}

	public function book($name)
	{
		$this->load->helper('file');
		$file_list = get_filenames(Main::REPO_ROOT.$name);
		$new_file_list = array_filter($file_list, array(__CLASS__,"filterFile"));
		$this->load->view('layout/main', array(
			'title' => $name,
			'page' => 'book',
			'doc_list' => $new_file_list
		));
//                var_dump($new_file_list);
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

