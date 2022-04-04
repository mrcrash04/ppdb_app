<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Siswa_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Siswa_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  function detail_data($id_formulir = NULL)
  {
    $query = $this->db->get_where('formulir', array('id_formulir' => $id_formulir))->row();
    return $query;
  }

  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  // ------------------------------------------------------------------------
  function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  function ubah($data, $id_formulir)
  {
    $this->db->where('id_formulir', $id_formulir);
    $this->db->update('formulir', $data);
    return TRUE;
  }
}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */