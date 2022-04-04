<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Setting
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

class Setting extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Sistem Informasi PPDB | Setting ';
    $data['admin'] = $this->db->get('sliders')->result();

    $this->load->view('setting/banner', $data);
  }

  public function addbanner()
  {
    $slug            = $this->input->post('slug');
    $images            = $_FILES['images']['name'];
    if ($images = '') {
    } else {
      $config['upload_path']        = './images';
      $config['allowed_types']      = 'jpg|jpeg|png';
      $config['max_size']           =     1024;
      $config['file_name']          =     'banner';
      $config['image_width']        = 1920;
      $config['image_height']        = 1080;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('images')) {
        echo "images Gagal Diupload !";
      } else {
        $images = $this->upload->data('file_name');
      }
    }

    $data = array(
      'images'         => $images,
      'slug'          => $slug,
      'created_at'    => date('Y-m-d H:i:s'),
      'updated_at'    => date('Y-m-d H:i:s')
    );

    // echo '<pre>', var_dump($data), '</pre>';
    $this->db->insert('sliders', $data);
    redirect('setting');
  }

  public function delete()
  {
    $id = $this->uri->segment(3);
    $this->db->where('id', $id);
    $this->db->delete('sliders');
    redirect('setting');
  }
}


/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */