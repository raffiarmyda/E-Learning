
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Android extends CI_Controller
 {
 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_android');
 	}

public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$response = $this->m_android->login($username, $password);

		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
        ->_display();
        exit;

	}
	public function absen()
	{
		date_default_timezone_set('Asia/Jakarta');
    // $data['id_akses'] ='2';
		$data['id_siswa'] = $this->input->post('id_siswa');
		$data['tgl_absen'] =  date("d/m/Y");

		$response = $this->m_android->register($data);

		$this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response,  JSON_PRETTY_PRINT))
        ->_display();
        exit;

	}



}
	?>