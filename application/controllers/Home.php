<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Home
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

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['admin'] = $this->db->get('sliders')->result();
    // echo '<pre>', var_dump($data), '</pre>';
    $this->load->view('frontend/content/home', $data);
    // $this->load->view('test', $data);
  }
  public function sejarah()
  {
    $this->load->view('frontend/content/sejarah');
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */