<?php 

	class sewagedung extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_sewa');
			$this->load->helper('url');
		}

		function tambahdata(){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$jenisgedung = $this->input->post('jenisgedung');
			$waktusewa = $this->input->post('waktusewa');
			$lamasewa = $this->input->post('lamasewa');
			$message = $this->input->post('message');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'telp' => $telp,
				'jenisgedung' => $jenisgedung,
				'waktusewa' => $waktusewa,
				'lamasewa' => $lamasewa,
				'message' => $message,
			);

			$this->M_sewa->input_data($data,'reservasi');
			redirect('home/index');
		}

		//edit reservasi

		function edit_reservasi($id_reservasi){
			$where = array('id_reservasi' => $id_reservasi);
			$data['reservasi'] = $this->M_sewa->edit_data($where,'reservasi')->result();
			$this->load->view('edit_reservasi',$data);
		}

		//aksi update data

		public function aksiupdatedata(){
        $this->form_validation->set_rules('id_reservasi', 'id_reservasi', 'required');
        // $this->form_validation->set_rules('pemilik', 'pemilik', 'required');

        $id_reservasi = $this->input->post('id_reservasi');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$telp = $this->input->post('telp');
		$jenisgedung = $this->input->post('jenisgedung');
		$waktusewa = $this->input->post('waktusewa');
		$lamasewa = $this->input->post('lamasewa');
		$message = $this->input->post('message');
		{
	        
            $data = array(
				'nama' => $nama,
				'email' => $email,
				'telp' => $telp,
				'jenisgedung' => $jenisgedung,
				'waktusewa' => $waktusewa,
				'lamasewa' => $lamasewa,
				'message' => $message,
			);
	        }

            $this->M_sewa->update_data($data,$id_reservasi);
            redirect('home/jadwal');
        }

        //Hapus Data

        function hapusdata($id_reservasi){
			if($id_reservasi==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('home/jadwal');
			}	
			else{
			$this->M_sewa->hapus_data($data,$id_reservasi);
			redirect('home/jadwal');
			}
		}


		//Registrasi User

		function tambahuser(){
			$namalengkap = $this->input->post('namalengkap');
			$email = $this->input->post('email');
			$telp = $this->input->post('telp');
			$alamat = $this->input->post('alamat');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			

			$data = array(
				'namalengkap' => $namalengkap,
				'email' => $email,
				'telp' => $telp,
				'alamat' => $alamat,
				'username' => $username,
				'password' => md5($password),
				'role' => 0,
			);

			$this->M_sewa->input_data($data,'user');
			redirect('home/login');
		}

		//cek Login
		function aksi_login_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_sewa->cek_login("user",$where);
		if($cek->num_rows() == 1){
			foreach ($cek->result() as $session) {
				$sess_data['id'] = $session->id;
				$sess_data['username'] = $session->username;
				$sess_data['role'] = $session->role;
				$sess_data['status'] = 'login_user';
				$this->session->set_userdata($sess_data);
			}
			redirect(base_url("home/index"));
		}else{
			echo "Username dan password salah !";
		}
	}

	//aksi logout
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home/index'));
	}

}