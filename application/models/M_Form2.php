<?php

use GuzzleHttp\Client;



class M_Form extends CI_Model {


  private $_client;

  public function __construct()
  {
    $this->_client  = new Client([
      'base_uri' => 'https://dev.farizdotid.com/api/',
      // 'query' => 
    ]);

  }
  // ------------------------------------------------------------------------
  public function get_provinsi()
  {

    $response = $this->_client->request('GET','daerahindonesia/provinsi',[
        'query' => [
        // 'id_provinsi' => 32,
      ]
    ]);
    

    $result = json_decode($response->getBody()->getContents(), true);
    
    return $result['provinsi'];
  }

  public function get_kota()
  {

    $response = $this->_client->request('GET','daerahindonesia/kota',[
        'query' => [
        'id_provinsi' => 32,
      ]
    ]);
    

    $result = json_decode($response->getBody()->getContents(), true);
    
    return $result['kota_kabupaten'];
  }

  // ------------------------------------------------------------------------
}

/* End of file M_Form_model.php */
/* Location: ./application/models/M_Form_model.php */