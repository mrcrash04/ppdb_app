<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Siswa
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

class Siswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Siswa_model');
  }

  public function index()
  {
    $data['title'] = 'Data Pendaftaran Calon Peserta Didik Baru';
    $data['siswa'] = $this->db->get('formulir')->result();
    // echo '<pre>', var_dump($data), '</pre>';
    // die;
    $this->load->view('Siswa/index', $data);
  }

  public function detail($id_formulir)
  {
    $data['title'] = 'Data Pendaftaran Calon Peserta Didik Baru';

    $detail = $this->Siswa_model->detail_data($id_formulir);
    $data['detail'] = $detail;
    $this->load->view('siswa/detail', $data);
  }

  public function hapus($id_formulir)
  {
    $data['title'] = 'Data Pendaftaran Calon Peserta Didik Baru';

    $where = array('id_formulir' => $id_formulir);
    $this->Siswa_model->hapus_data($where, 'formulir');
    redirect('Siswa/index');
  }

  public function edit_verifikasi()
  {
    $where = array('id' => $id);
    $data['nasabah'] = $this->m_nasabah->edit_data($where, 'nasabah')->result();
    $this->load->view('nasabah/edit', $data);
  }
}


/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */