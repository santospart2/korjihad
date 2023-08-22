<?php 

class Dashboard extends CI_Controller
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
			'data'		=> $this->md->get('tbl_data'),
			'session'		=> $this->session->userdata('nama'),
			'content' 	=> 'main/mview',
		];
		$this->load->view('template/tview',$data);
	}

	public function vflip($i)
	{
		$where = array('id' => $i);
		$data = [
			'data'		=> $this->md->getRow($where,'tbl_data')->row(),
			'session'	=> $this->session->userdata('nama'),
			'content'	=> 'main/mflip'
		];

		$this->load->view('template/tview',$data);
	}

	public function data()
	{
		$data = [
			'data'		=> $this->md->get('tbl_data'),
			'session'	=> $this->session->userdata('nama'),
			'content' 	=> 'data/dview'
		];
		$this->load->view('template/tview',$data);
	}

	private function _validasi()
	{
		$this->form_validation->set_rules('edisi', 'edisi', 'required|trim');
		$this->form_validation->set_rules('tgl', 'tgl', 'required|trim');
	}

	public function add()
	{
		$this->_validasi();
		if ($this->form_validation->run() == false) {
			$data['title'] = "korjihad";

			set_pesan('Periksa Form Inputan', false);
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$data = array();
			$config['upload_path'] = './assets/pdf/';
			$config['allowed_types'] = 'pdf|jpg|png|PNG|jpeg';
			$config['encrypt_name'] = true;  
			$this->load->library('upload', $config);
			$data['edisi'] = $this->input->post('edisi');
			$data['tgl'] = $this->input->post('tgl');

			if (!$this->upload->do_upload('file1')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$fileData = $this->upload->data();
				$data['cover'] = $fileData['file_name'];
			}

			if (!$this->upload->do_upload('file2')) {
				$error = array('error' => $this->upload->display_errors()); 
			} else {
				$fileData = $this->upload->data();
				$data['file'] = $fileData['file_name'];
			}

			$this->db->insert('tbl_data',$data);
			set_pesan('data berhasil disimpan');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data = array(
			'title'		=> "edit data",
			'data'		=> $this->md->getRow($where,'tbl_data')->row(),
			'session'		=> $this->session->userdata('nama'),
			'content'	=> 'data/dedit'
		);
		$this->load->view('template/tview',$data);
	}

	public function update()
	{
		$this->_validasi();
		if ($this->form_validation->run() == false) {
			$data['title'] = "edit data";
			set_pesan('Update Data Gagal');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$i 	= $this->input->post(null,true);
			$id = $i['id'];
			$data = [
				'edisi'		=> $i['edisi'],
				'judul'		=> $i['judul'],
				// 'file'		=> $i['file']
			];
			$update = $this->md->update('tbl_data', 'id', $id, $data);
			if ($update) {
				set_pesan('Update Data Berhasil');
				redirect('data'); 
			} else {
				set_pesan('pesan', 'Update Data Gagal');
				redirect($_SERVER['HTTP_REFERER']); 
			}

		}
	}

	public function delete($i)
	{
		$where = array('id' => $i);
		$file = $this->md->getRow($where,'tbl_data')->result_array();
		$cvr = $file[0]['cover'];
		$pdf = $file[0]['file'];
		if ($this->md->delete('tbl_data', 'id', $i)) {
			unlink('./assets/pdf/'.$cvr);
			unlink('./assets/pdf/'.$pdf);
			set_pesan('data berhasil dihapus.');
		} else {
			set_pesan('data gagal dihapus.', false);
		}
		redirect($_SERVER['HTTP_REFERER']); 
	}


}


?>