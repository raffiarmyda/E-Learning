<?php
class m_android extends CI_Model{


    public function login($username, $password)
	{

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->join('tb_siswa','tb_siswa.id = tb_login.id');
		$this->db->join('tb_kelas','tb_kelas.id_kelas = tb_siswa.id_kelas');
		$this->db->where('username',$username);

		// $sql = $this->db->query("SELECT * FROM tb_login JOIN tb_siswa ON tb_login.id = tb_siswa.id JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas WHERE username=''");

		$response = array("result" => "false", "message" => "Username atau password salah");
		foreach($this->db->get()->result_array() as $row)

		{

			if (($password) == $row['password'])
			{
				$response['result'] = "true"; 	//  <- getString neng java jupuk string neng jero $response[''],iki getString('result')
				$response['message'] = "Login berhasil"; 	//  <- getString neng java jupuk string neng jero $response[''],iki getString('message')
				$response['nama_siswa'] = $row['nama_siswa'];
				$response['username'] = $row['username'];
                $response['password'] = $row['password'];
                $response['akses'] = $row['akses'];
                $response['nis'] = $row['nis'];
                $response['id'] = $row['id'];


			}

		}

		return $response;

	}

public function register($data)
	{

		$this->db->trans_begin();

		$this->db->insert('tb_absen', $data);
		// $id_outlet = $this->db->insert_id();

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {

			$this->db->trans_rollback();

			$response = array(
				'result' => "false",
				'message' => "Data gagal disimpan, Silahkan coba kembali"
				);

		} else {

			$this->db->trans_commit();

			$response = array(
				'result' => "true",
				'message' => "Data berhasil disimpan"
				);

		}


		return $response;

	}

}
?>