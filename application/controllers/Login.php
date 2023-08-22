<?php 

class Login extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
    $this->load->model('Mdashboard','md');
  }

  public function index()
  {
    $data = [
      'title' => 'Login Korjihad'
    ];
    $this->load->view('login/cek',$data);
  }


  public function cek()
  {
    $i = $this->input->post(null, true);
    $user       = sha1($i['username']);
    $where      = array('username' => $user);
    $cek        = $this->md->getUser($user);
    if ($cek == null) {
      set_pesan('Username Tidak di Temukan', false);
      redirect($_SERVER['HTTP_REFERER']);
    } else  {
      $data = array(
        'title'     => 'Auth',
        'user'     => $this->md->getRow($where,'tbl_user')->row()
      );
      $this->load->view('login/auth',$data);
    }
  }

  public function auth()
  {
    $i = $this->input->post(null, true);
    $data = array(
      'username' => $i['username'],
      'password' => sha1($i['password'])
    );

    $hasil = $this->md->cek($data);
    if ($hasil->num_rows() == 1) {
      foreach ($hasil->result() as $sess) {
        $sess_data['nama'] = $sess->nama;
        $sess_data['role'] = $sess->role;

        $this->session->set_userdata($sess_data);
      }
      if ($this->session->userdata('role') == 1) {
        set_pesan('Selamat Datang '.$sess->nama, true);
        redirect('dashboard');
      }elseif ($this->session->userdata('role') == 2) {
        set_pesan('Selamat Datang '.$sess->nama, true);
        redirect('dashboard');
      }
    }
    set_pesan('Password Salah', false);
    redirect('login');
  }

  public function logout()
  {
    if (!$this->session->userdata('role')){
      set_pesan('LogOut Sukses'.$sess->nama, true);
      redirect('login');
    }
    $this->session->unset_userdata('nama');
    $this->session->unset_userdata('role');
    set_pesan('LogOut Sukses ', true);
    redirect('login');
  }


}

?>