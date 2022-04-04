<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Dashboard
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

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->library('session');
    // $this->load->library(['form_validation', 'session']);

    if ($this->session->userdata('role') != '1') {
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-info alert-dismissible">

      <button type="button" class="close" data-dismiss="alert" aria-hidden="true" role="alert">&times;</button>
      <h5><i class="icon fas fa-info"></i> Peringatan</h5>
      Harap Login Terlebih Dahulu !
      
      </div>');
      redirect('Auth');
    }
  }

  public function index()
  {
    $data['title'] = "Sistem Informasi PPDB | Dashboard ";
    $query = $this->db->query("SELECT * FROM formulir");

    $query1 = $this->db->query("SELECT * FROM formulir WHERE verifikasi = '1' ");
    $query2 = $this->db->query("SELECT * FROM formulir WHERE verifikasi = '0' ");
    // $data['user'] = $this->db->get_where('formulir')->row_array();
    // $data['user1'] = $this->db->get("users")->result_array();
    // $data['user'] = $this->db->query("SELECT * FROM users");
    // $data['user'] = $data->row(0, 'name');
    $data['allsiswa'] = $query->num_rows();
    $data['diterima'] = $query1->num_rows();
    $data['tidakditerima'] = $query2->num_rows();
    // echo '<pre>', var_dump($data), '</pre>';
    // die;
    $this->load->view('Admin/index', $data);
    // $this->load->view('template/sidebar', $data);
  }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */