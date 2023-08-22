<?php 

class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdashboard','md');
		if (!$this->session->userdata('role')){
            redirect('login');
        }
	}

	public function index()
	{
		$data = [
			'data'		=> $this->md->get('tbl_user'),
			'session'	=> $this->session->userdata('nama'),
			'content'	=> 'user/uview'
		];
		$this->load->view('template/tview',$data);
	}

	private function _validasi()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
	}

	public function add()
	{
		$this->_validasi();
		if ($this->form_validation->run() == false) {
			$data['title'] = "korjihad";

			set_pesan('Periksa Form Inputan', false);
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$i = $this->input->post(null, true);
			$u 			= sha1($i['username']);
			$cek        = $this->md->getUser($u);
			if ($cek != null) {
				set_pesan('username Sudah digunakan!!', false);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$input = array(
					'nama'		=> $i['nama'],
					'username'	=> sha1($i['username']),
					'password'	=> sha1($i['password']),
					'role'		=> 1,
				);
				$insert = $this->md->insert('tbl_user', $input);
				if ($insert) {
					set_pesan('data berhasil disimpan');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
	}

	public function edit($i)
	{
		$where = ['id'=>$i];
		$data = [
			'title' 	=> 'User',
			'session'	=> $this->session->userdata('nama'),
			'data'		=> $this->md->getRow($where,'tbl_user')->row(),
			'content'	=> 'user/uedit'
		];
		$this->load->view('template/tview',$data);
	}

	public function update()
	{

		$this->_validasi();
		if ($this->form_validation->run() == false) {
			$data['title'] = "User Pengguna";
			set_pesan('Update Data Gagal');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$i = $this->input->post(null, true);
			$u 			= sha1($i['username']);
			$cek        = $this->md->getUser($u);
			if ($cek != null) {
				set_pesan('username Sudah digunakan!!', false);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$id = $i['id'];
				$input = array(
					'nama'		=> $i['nama'],
					'username'	=> sha1($i['username']),
					'password'	=> sha1($i['password']),
				);

				$update = $this->md->update('tbl_user', 'id', $id, $input);

				if ($update) {
					set_pesan('Update Data Berhasil');
					redirect('user'); 
				} else {
					set_pesan('pesan', 'Update Data Gagal');
					redirect($_SERVER['HTTP_REFERER']); 
				}
			}	
		}
	}

	public function delete($i)
	{
		$where = array('id' => $i);
		$file = $this->md->getRow($where,'tbl_user')->result_array();
		if ($this->md->delete('tbl_user', 'id', $i)) {
			set_pesan('data berhasil dihapus.');
		} else {
			set_pesan('data gagal dihapus.', false);
		}
		redirect($_SERVER['HTTP_REFERER']); 
	}

}

?>