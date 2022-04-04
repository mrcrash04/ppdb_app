<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

/**
 *
 * Controller Formulir
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

class Formulir extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->_client  = new Client([
      'base_uri' => 'https://dev.farizdotid.com/api/',
      // 'query' => 
    ]);
    $this->load->model('M_Form');
  }
  public function getProvinsi()
  {

    $getProvinsi = $this->_client->request('GET', 'daerahindonesia/provinsi');
    $response = [
      'result' => json_decode(stripslashes($getProvinsi->getBody()->getContents()), true, JSON_UNESCAPED_SLASHES),
      'message' => 'berhasil'
    ];
    header('Content-Type', 'application/json');
    echo json_encode($response);
  }

  public function getKabKota()
  {
    $id = $this->input->post('id', TRUE);
    if ($id !== NULL) {
      $getKabKota = $this->_client->request('GET', 'daerahindonesia/kota', [
        'query' => [
          'id_provinsi' => $id,
        ]
      ]);

      $response = [
        'result' => json_decode(stripslashes($getKabKota->getBody()->getContents()), true, JSON_UNESCAPED_SLASHES),
        'message' => 'berhasil!'
      ];
    } else {
      $response = [
        'message' => 'Data Tidak Ditemukan!'
      ];
    }
    header('Content-Type', 'application/json');
    echo json_encode($response);
  }

  public function getKec()
  {
    $id = $this->input->post('id', TRUE);
    if ($id !== NULL) {
      $getKec = $this->_client->request('GET', 'daerahindonesia/kecamatan', [
        'query' => [
          'id_kota' => $id,
        ]
      ]);

      $response = [
        'result' => json_decode(stripslashes($getKec->getBody()->getContents()), true, JSON_UNESCAPED_SLASHES),
        'message' => 'berhasil!'
      ];
    } else {
      $response = [
        'message' => 'Data Tidak Ditemukan!'
      ];
    }
    header('Content-Type', 'application/json');
    echo json_encode($response);
  }

  public function getKel()
  {
    $id = $this->input->post('id', TRUE);
    if ($id !== NULL) {
      $getKel = $this->_client->request('GET', 'daerahindonesia/kelurahan', [
        'query' => [
          'id_kecamatan' => $id,
        ]
      ]);

      $response = [
        'result' => json_decode(stripslashes($getKel->getBody()->getContents()), true, JSON_UNESCAPED_SLASHES),
        'message' => 'berhasil!'
      ];
    } else {
      $response = [
        'message' => 'Data Tidak Ditemukan!'
      ];
    }
    header('Content-Type', 'application/json');
    echo json_encode($response);
  }
  public function index()
  {
    $dariDB = $this->M_Form->cekkodebarang();
    // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
    $nourut = substr($dariDB, 1, 3);
    $no_pendaftaran = $nourut + 1;
    $data = array('no_pendaftaran' => $no_pendaftaran);
    $data['title'] = 'Formulir Pendaftaran YPAI';
    $this->load->view("Formulir/index", $data);

    // $this->load->view('Formulir/index');

    // echo '<pre>' , var_dump($data1) , '</pre>';die;
    // var_dump($data);die;
  }

  public function add()
  {
    // informasi diri
    $date_created = $this->input->post('date_created');
    $no_pendaftaran = $this->input->post('no_pendaftaran');
    $nama_lengkap   = htmlspecialchars($this->input->post('nama_lengkap'));
    $nisn           = htmlspecialchars($this->input->post('nisn'));
    $tempat         = htmlspecialchars($this->input->post('tempat'));
    $tanggal_lahir  = $this->input->post('tanggal_lahir');
    $jk             = $this->input->post('jk');
    $alamat         = htmlspecialchars($this->input->post('alamat'));
    $provinsi       = $this->input->post('provinsi');
    $kota           = $this->input->post('kota');
    $kecamatan      = $this->input->post('kecamatan');
    $kelurahan      = $this->input->post('kelurahan');
    $anak           = htmlspecialchars($this->input->post('anak'));
    $status         = htmlspecialchars($this->input->post('status'));
    $nomor_hp       = htmlspecialchars($this->input->post('nomor_hp'));
    // asal sekolah
    $pendidikan             = $this->input->post('pendidikan');
    $tk                     = htmlspecialchars($this->input->post('tk'));
    $sd                     = htmlspecialchars($this->input->post('sd'));
    $smp                    = htmlspecialchars($this->input->post('smp'));
    $alamat_sekolah         = htmlspecialchars($this->input->post('alamat_sekolah'));
    // informasi orangtua
    $orangtua               = $this->input->post('orangtua');
    $nama_ortu              = htmlspecialchars($this->input->post('nama_ortu'));
    $nik                    = htmlspecialchars($this->input->post('nik'));
    $alamat_ortu            = htmlspecialchars($this->input->post('alamat_ortu'));
    $pekerjaan              = htmlspecialchars($this->input->post('pekerjaan'));
    $no_telp_ortu           = htmlspecialchars($this->input->post('no_telp_ortu'));
    $image                  = $_FILES['image']['name'];
    if ($image = '') {
    } else {
      $config['upload_path']        = './images/pas_foto';
      $config['allowed_types']      = 'jpg|jpeg|png';
      $config['max_size']           =     2048;
      $config['file_name']          =     'pas_foto';
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {
        echo "Foto Gagal Diupload !";
      } else {
        $image = $this->upload->data('file_name');
      }
    }


    $data = [
      'date_created' => date("j F, Y, g:i a"),
      'no_pendaftaran'  => $no_pendaftaran,
      'image'           => $image,
      'nama_lengkap'    => $nama_lengkap,
      'nisn'            => $nisn,
      'tempat'          => $tempat,
      'tanggal_lahir'   => $tanggal_lahir,
      'jk'              => $jk,
      'alamat'          => $alamat,
      'provinsi'        => $provinsi,
      'kota'            => $kota,
      'kecamatan'       => $kecamatan,
      'kelurahan'       => $kelurahan,
      'anak'            => $anak,
      'status'          => $status,
      'nomor_hp'        => $nomor_hp,
      'pendidikan'      => $pendidikan,
      'tk'              => $tk,
      'sd'              => $sd,
      'smp'             => $smp,
      'alamat_sekolah'  => $alamat_sekolah,
      'orangtua'        => $orangtua,
      'nama_ortu'       => $nama_ortu,
      'nik'             => $nik,
      'alamat_ortu'     => $alamat_ortu,
      'pekerjaan'       => $pekerjaan,
      'no_telp_ortu'    => $no_telp_ortu,
      'verifikasi'      => '0'
    ];

    // echo '<pre>', var_dump($data), '</pre>';
    // die;
    $this->db->insert('Formulir', $data);
    $this->session->set_flashdata('pesan', 'berhasil');
    redirect('Formulir');
  }
}


/* End of file Formulir.php */
/* Location: ./application/controllers/Formulir.php */