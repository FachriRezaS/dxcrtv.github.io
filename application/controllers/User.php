<?php  

/**
 * 
 */
class User extends CI_Controller
{
	
	public function index()
	{
		$data['title'] = 'Administrator';		
	}

	public function login()
	{
		
		$data['title'] = 'LOGIN';
		// set rules validasi
		$this->form_validation->set_rules('email', 'Email', 'required|Valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		// cek rules
		if($this->form_validation->run() ==  FALSE) 
		{			
			$this->load->view('user/login', $data);
		} 
		else 
		{
			// proses login
			// tampung data
			$email = $this->input->post('email'); //$_POST['email']
			$password = $this->input->post('password');

			// cek apakah email dan password sesuai dengan database
			$user = $this->user_model->get_user_by_email_password($email,$password);

			if (!empty($user) ) 
			{
				// session
				$data = array(
					'id' => $user->id,
					'username' => $user->username,
					'email' => $user->email,
					'is_login' => TRUE
				);
				
				// buat session
				$this->session->set_userdata($data);

				// redirect ke halaman area
				redirect('admin/dashboard');
			}
			else
			{
				// buat pesan error
				$this->session->set_flashdata('error_login', 'Wrong email or Password.');
				// redirect ke halaman login-l
				redirect('user/login');
			}
		}			
	}

	public function registernew()
	{
		$data['title'] = 'Register-DaxAdmin';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|Valid_email|is_unique[admin.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('retypepassword', 'Retype Password', 'required|min_length[5]|matches[password]');		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/registernew', $data);
		} 
		else 
		{
			// proses register
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => sha1($this->input->post('password'))
			);

			$this->user_model->register($data);

			// flashdata
			$this->session->set_flashdata('success', 'akun berhasil terdaftar. <a href="'.site_url('user/login').'">Log In</a>');

			redirect('user/registernew');
		}
	}

	public function logout()
	{
		$data = array('user_id',
					'user_name' ,
					'user_email',
					'is_login' 
				);

		$this->session->unset_userdata($data);

		redirect('user/login');
	}

}

?>