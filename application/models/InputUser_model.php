<?php 
class InputUser_model extends CI_Model
{
	
	private $_table = "tb_login";
	private $_guru ="tb_guru";
	private $_siswa = "tb_siswa";
	public $id;
	public $username;
	public $password;
	public $akses;
// =========================== Awal Model Tb_Login untuk Pengguna ===================================
	public function getAll() // ini untuk query ke dalam tb_login yang nanti datanya dipanggil di controller
	{
		$this->db->select('*');
		$this->db->from('tb_login');
		return $this->db->get()->result();
	}
	
	public function getById($id) {							
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('username', $id);
		return $this->db->get()->row_array(); // rralat iki gak dipake
	}
	
	
	public function save($data,$table) // ini fungsi untuk menyimpan inputan user baru dari form yang diteruskan oleh controller untuk disimpan
	{
		$this->db->insert($table,$data); // $table berisi tabel yang dituju , dan $data itu berisi inputa yang dimasukkan dari form view v_tambah_user.
	}
	
	
	function edit($id)// ini model buat edit data user di tb_login yang dimana diambil dari parsingan  segment dari controller
	// nilai yang dipakai itu id nya dari tb_login, jadi $id itu berisi id dari pengguna
	{
		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}

	function save_edit_data($id, $data) // dari namanya udah keliatan hehehe
	{
		$this->db->where('id', $id);
		$berhasil = $this->db->update('tb_login', $data);
		return $berhasil;
		// if($berhasil)
		// {
		// 	redirect('edit'.$id.'?update=1','refresh');
		// }
		// else
		// {
		// 	redirect('edit'.$id.'?update=2','refresh');
		// }
	}
	
	function delete_data($id) // ini buat delete datanya berdasarkan id
	{
		$this->db->where('id', $id);
		$berhasil = $this->db->delete('tb_login');
		if($berhasil)
		{
            redirect('Page/data_login/'.$id.'?delete=1','refresh');
		}
		else
		{
            redirect('Page/data_login/'.$id.'?delete=2','refresh');
		}
	}
		
//================================  Akhir Model Untuk Tb_Login =========================================//

//================================= Awal Model Tb_Kelas ================================================

	public function getAll_kelas_dist()
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		return $this->db->get()->result();
	}
	public function getAll_kelas()
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		return $this->db->get()->result();
	}
	
	
	public function save_kelas($data)
	{
		$this->db->select("*");
		$this->db->from('tb_kelas');
		$this->db->insert($data);
	}
	
	
	function edit_kelas($id)
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		$this->db->where('id_kelas', $id);
		return $this->db->get()->row_array();
	}

	function save_edit_data_kelas($id, $data)
	{
		$this->db->where('id_kelas', $id);
		$berhasil = $this->db->update('tb_kelas', $data);
		return $berhasil;
	}
	
	function delete_data_kelas($id)
	{
		$this->db->where('id_kelas', $id);
		$berhasil = $this->db->delete('tb_kelas');
		return $berhasil;
	// 	if($berhasil)
    //    {
    //         redirect('Page/data_kelas/'.$id.'?delete=1','refresh');
    //    }
	// 	else
    //    {
    //         redirect('Page/data_kelas/'.$id.'?delete=2','refresh');
    //    }
	}

//================================= Akhir Model Tb_Kelas ===============================================

// ============================= Awal Model Untuk Tb_Jurusan ===========================================
	// public function getAll_jurusan_distinct()
	// {
	// 	$this->db->distinct();
	// 	$this->db->select('*');
	// 	$this->db->from('tb_jurusan');
	// 	return $this->db->get()->result();
	// }

	// public function getAll_jurusan()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tb_jurusan');
	// 	$this->db->join('tb_kelas','tb_kelas.id_jurusan = tb_jurusan.id_jurusan');
	// 	return $this->db->get()->result();
	// }
	
	
	// public function save_jurusan($result)
	// {
	// 	$total_array = count($result);
 
	// 	if($total_array != 0)
	// 	{
	// 		$this->db->insert_batch('tb_jurusan', $result);
	// 	}
	// }
	
	
	// function edit_jurusan($id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tb_jurusan');
	// 	$this->db->where('id_jurusan', $id);
	// 	return $this->db->get()->row_array();
	// }

	// function save_edit_data_jurusan($id, $data)
	// {
	// 	$this->db->where('id_jurusan', $id);
	// 	$berhasil = $this->db->update('tb_jurusan', $data);
	// 	if($berhasil)
	// 	{
	// 		redirect('Page/edit_jurusan/'.$id.'?update=1','refresh');
	// 	}
	// 	else
	// 	{
	// 		redirect('Page/edit_jurusan/'.$id.'?update=2','refresh');
	// 	}
	// }
	
	// function delete_data_jurusan($id)
	// {
	// 	$this->db->where('id_jurusan', $id);
	// 	$berhasil = $this->db->delete('tb_jurusan');
	// 	if($berhasil)
    //    {
    //         redirect('Page/data_jurusan/'.$id.'?delete=1','refresh');
    //    }
	// 	else
    //    {
    //         redirect('Page/data_jurusan/'.$id.'?delete=2','refresh');
    //    }
	// }

//================================= Akhir Model Untuk Tb_Jurusan ==========================================//

// ============================= Awal Model Untuk Tb_Mengajar ===========================================
	public function getAll_mengajar()
	{
		$this->db->select('*');
		$this->db->from('tb_mengajar');
		$this->db->join('tb_kelas','tb_mengajar.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_guru','tb_mengajar.nip = tb_guru.nip');
		$this->db->join('tb_mapel','tb_mengajar.id_mapel = tb_mapel.id_mapel');
		return $this->db->get()->result();
	}
	
	
	public function save_mengajar($result)
	{
		$total_array = count($result);
 
		if($total_array != 0)
		{
			return $this->db->insert_batch('tb_mengajar', $result);
		}
	}
	
	
	function edit_mengajar($id)
	{
		$this->db->select('*');
		$this->db->from('tb_mengajar');
		$this->db->where('id_mengajar', $id);
		return $this->db->get()->row_array();
	}

	function save_edit_data_mengajar($id, $data)
	{
		$this->db->where('id_mengajar', $id);
		$berhasil = $this->db->update('tb_mengajar', $data);
		if($berhasil)
		{
			redirect('Page/data_mengajar/'.$id.'?update=1','refresh');
		}
		else
		{
			redirect('Page/data_mengajar/'.$id.'?update=2','refresh');
		}
	}
	
	function delete_data_mengajar($id)
	{
		$this->db->where('id_mengajar', $id);
		$berhasil = $this->db->delete('tb_mengajar');
		if($berhasil)
       {
            redirect('Page/data_mengajar/'.$id.'?delete=1','refresh');
       }
		else
       {
            redirect('Page/data_mengajar/'.$id.'?delete=2','refresh');
       }
	}

//================================= Akhir Model Untuk Tb_Mengajar ==========================================//

// ================================ Awal Model Untuk Tb_Guru ===============================================
	public function getAll_guru()
	{
		return $this->db->get($this->_guru)->result();
	}
	
	
	public function save_guru($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	function edit_guru($id)
	{
		$this->db->select('*');
		$this->db->from('tb_guru');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}

	function save_edit_data_guru($id, $data)
	{
		$this->db->where('id', $id);
		$berhasil = $this->db->update('tb_guru', $data);
		if($berhasil)
		{
			redirect('Page/data_guru/'.$id.'?update=1','refresh');
		}
		else
		{
			redirect('Page/data_guru/'.$id.'?update=2','refresh');
		}
	}

	
	function delete_data_guru($id)
	{
		
		$_id = $this->db->get_where('tb_guru',['id' => $id])->row();
        $query = $this->db->delete('tb_guru',['id'=>$id]);
        if($query){
                unlink("upload/guru/".$_id->foto);
            }
		if($query)
		{
            redirect('Page/data_guru/'.$id.'?delete=1','refresh');
		}
		else
		{
            redirect('Page/data_guru/'.$id.'?delete=2','refresh');
		}
	}

// ======================= Akhir Tb_Guru ========================================

// ======================== Tb_Mapel =============================================
public function getAll_mapel()
	{
		$this->db->select('*');
		$this->db->from('tb_mapel');
		return $this->db->get()->result();
	}

public function save_mapel($result)
	{
		$total_array = count($result);
 
		if($total_array != 0)
		{
			$this->db->insert_batch('tb_mapel', $result);
		}
	}

function edit_mapel($id)
	{
		$this->db->select('*');
		$this->db->from('tb_mapel');
		$this->db->where('id_mapel', $id);
		return $this->db->get()->row_array();
	}

	function save_edit_data_mapel($id, $data)
	{
		$this->db->where('id_mapel', $id);
		$berhasil = $this->db->update('tb_mapel', $data);
		if($berhasil)
		{
			redirect('Page/data_mapel/'.$id.'?update=1','refresh');
		}
		else
		{
			redirect('Page/data_mapel/'.$id.'?update=2','refresh');
		}
	}
	

public function delete_data_mapel($id)
	{
		$this->db->where('id_mapel', $id);
		$berhasil = $this->db->delete('tb_mapel');
		if($berhasil)
       {
            redirect('Page/data_mapel/'.$id.'?delete=1','refresh');
       }
		else
       {
            redirect('Page/data_mapel/'.$id.'?delete=2','refresh');
       }
	}

// ================================ Awal Model Untuk Tb_Siswa ===============================================
	public function getAll_siswa()
	{
		return $this->db->get($this->_siswa)->result();
	}
	
	
	public function save_siswa($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	public function edit_siswa($id)
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}

	public function save_edit_data_siswa($id, $data)
	{
		$this->db->where('id', $id);
		$berhasil = $this->db->update('tb_siswa', $data);
		if($berhasil)
		{
			redirect('Page/data_siswa/'.$id.'?update=1','refresh');
		}
		else
		{
			redirect('Page/data_siswa/'.$id.'?update=2','refresh');
		}
	}

	
	public function delete_data_siswa($id)
	{
		$_id = $this->db->get_where('tb_siswa',['id' => $id])->row();
        $query = $this->db->delete('tb_siswa',['id'=>$id]);
        if($query){
                unlink("upload/siswa/".$_id->foto);
            }
		if($query)
		{
            redirect('Page/data_siswa/'.$id.'?delete=1','refresh');
		}
		else
		{
            redirect('Page/data_siswa/'.$id.'?delete=2','refresh');
		}
	}

	public function getkelas()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas','tb_siswa.id_kelas = tb_kelas.id_kelas');
		return $this->db->get()->result();
	}



// ======================= Akhir Tb_Siswa ========================================	
	
}
?>