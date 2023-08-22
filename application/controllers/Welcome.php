<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdashboard','md');
	}

	public function index()
	{
		$data = [
			'title' => 'Korjihad',
			'data'	=> $this->md->get('tbl_data'),
		];
		$this->load->view('publik/pview',$data);
	}

	public function vflip($i)
	{
		$where = array('id' => $i);
		$data = [
			'title'	=>'Korjihad',
			'data'	=> $this->md->getRow($where,'tbl_data')->row()
		];
		$this->load->view('publik/pread',$data);
	}

	// public function flip()
	// {
	// 	$this->load->view('main/mflippp');
	// }

	public function mobile()
	{
		$data = [
			'title' => 'Korjihad',
			'data'	=> $this->md->get('tbl_data'),
		];
		$this->load->view('publik/mobileView',$data);
	}

	public function edisi()
	{
		$data = [
			'title' => 'Korjihad',
			'data'	=> $this->md->get('tbl_data'),
		];
		$this->load->view('publik/mobileEdisi',$data);
	}

	public function view($i)
	{
		$where = array('id' => $i);
		$data = [
			'title'	=>'Korjihad',
			'data'	=> $this->md->getRow($where,'tbl_data')->row()
		];
		$this->load->view('publik/mobileRead',$data);
	}
}
