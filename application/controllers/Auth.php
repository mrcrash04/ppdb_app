<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Auth
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library(['form_validation', 'session']);
    $this->load->helper('date');
  }

  public function index()
  {
    if ($this->session->userdata('name')) {
      redirect('Auth');
    }
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = 'YAYASAN BAABUSSALAAM | Login';
      $this->load->view('login', $data);
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    // usernya ada
    $user = $this->db->get_where('users', ['username' => $username])->row_array();
    if ($user) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {
        //cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'username' => $user['username'],
            'name' => $user['name'],
            'image' => $user['image'],
            'role' => $user['role']
          ];
          $this->session->set_userdata($data);
          // jika role admin
          if ($user['role'] == 1) {
            redirect('Dashboard');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('pesan', '
          <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

          <h5><i class="icon fas fa-exclamation-triangle"></i> Pemberitahuan!</h5>

          Password Salah !!! Harap Periksa Kembali 

          </div>
          ');
          redirect('Auth');
        }
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

          <h5><i class="icon fas fa-exclamation-triangle"></i> Pemberitahuan!</h5>

          Password Salah !!! Harap Periksa Kembali 

          </div>
          ');
        redirect('Auth');
      }
    } else {
      $this->session->set_flashdata('pesan', '
          <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

          <h5><i class="icon fas fa-exclamation-triangle"></i> Pemberitahuan!</h5>

          Password Salah !!! Harap Periksa Kembali 

          </div>
          ');
      redirect('Auth');
    }
  }

  public function registrasion()
  {
    if ($this->session->userdata('role') != '1') {
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-info alert-dismissible">

      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" role="alert">&times;</button>
      <h5><i class="icon fas fa-info"></i> Peringatan</h5>
      Harap Login Terlebih Dahulu !
      
      </div>');
      redirect('Auth');
    }

    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

    if ($this->form_validation->run() == FALSE) {
      $data['title'] = 'Sistem Informasi PPDB | SIPPDB 2022';
      $this->load->view('regis', $data);
      // var_dump($data);die;
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name')),
        'image' => 'profile.jpg',
        'username' => htmlspecialchars($this->input->post('username')),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'date_created' => time('Y-m-d H:i:s'),
        'is_active' => 1,
        'role' => 2
      ];

      $this->db->insert('users', $data);
      redirect('Auth/index');
    }
  }

  public function showregis()
  {
    $data['title'] = 'Sistem Informasi PPDB | Data Akun ';
    $data['regis'] = $this->db->get('users')->result();
    $this->load->view('regis/index', $data);
    // var_dump($data);die;
    // echo '<pre>' var_dump($data);die;  '</pre>';


  }

  public function logout()
  {
    $this->session->sess_destroy('username');
    $this->session->sess_destroy('name');
    $this->session->sess_destroy('role_id');
    redirect('Auth');
  }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */