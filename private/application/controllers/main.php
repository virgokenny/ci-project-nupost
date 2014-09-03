<?php

class Main extends CI_Controller
{
	const REPO_ROOT = 'private/repo/';

	protected $g_directory_list = array();

	public function index()
	{
		$this->load->helper('file');
		$this->load->view('layout/main', array(
			'title' => 'Browser',
			'page' => 'browser',
			'repo_list' => get_dir_file_info(Main::REPO_ROOT),
			'js_list' => array('import')
		));
	}

	public function filterFile($var)
	{
		$findme = ".rst";
		$result = strpos($var, $findme);
		return $result !== false;
	}

	public function gitstatus($file_name, $book)
	{
		$book_dir = Main::REPO_ROOT.$book;
		$result_str = shell_exec('cd '.$book_dir.';git status -s '.$file_name);
		return Main::status($result_str);
	}

	public function checkstatus($status_str)
	{
		$git_status = array('M', 'A', 'D', '??');
		$ret = '';

		foreach ($git_status as $status_flag)
		{
			$pos = strpos($status_str, $status_flag);
			if ( $pos !== false && $pos < 3)
			{
				$ret = $status_flag;
				break;
			}
		}

		return $ret;
	}

	private function getstatus($file_name, $book)
	{
		$book_dir = Main::REPO_ROOT.$book;
		$output_status = shell_exec('cd '.$book_dir.';git status -s '.$file_name);

		if ($output_status)
		{
			return  Main::checkstatus($output_status);
		}
		else
		{
			return '';
		}
	}

	private function print_dir($in, $path, $book)
	{
		foreach ($in as $k => $v)
		{
			if (!is_array($v)) {
//				echo "[file]: ",$path,$v,"\n";
				if (strpos($v, '.rst') !== false)
				{	
					array_push($this->g_directory_list, array(
						'name' => $path.$v,
						'status' => Main::getstatus($path.$v, $book)
					));
				}
			}
			else {
//				echo "[directory]: ",$path,$k,"\n",Main::print_dir($v,$path.$k.DIRECTORY_SEPARATOR, $book);
				Main::print_dir($v,$path.$k.DIRECTORY_SEPARATOR, $book);

			}
		}
	}

	public function book($name)
	{
		$this->load->helper('file');
		$this->load->helper('directory');

		$file_list = get_filenames(Main::REPO_ROOT.$name);
		$new_file_list = array_filter($file_list, array(__CLASS__,"filterFile"));

		$file_list_status = array();

		$directory_list = directory_map(Main::REPO_ROOT.$name);

		Main::print_dir($directory_list, '', $name);

		$git_status_log = shell_exec('cd '.Main::REPO_ROOT.$name.'; git status');

/*		var_dump($this->g_directory_list);

		foreach($new_file_list as $file_name) {
			$file_status = array (
				'name' => $file_name,
				'status' => Main::getstatus($file_name, $name)
			);

			array_push($file_list_status, $file_status);
		}	
 */
		$this->load->view('layout/main', array(
			'title' => $name,
			'page' => 'book',
			'doc_list' => /*$new_file_list*/ /*$file_list_status*/ $this->g_directory_list,
			'git_status' => $git_status_log
		));
	}

	public function doc($book, $docurl)
	{
		$this->load->helper('file');
		$doc = urldecode($docurl);
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
