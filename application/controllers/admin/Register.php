<?php  

	/**
	 * 
	 */
	class Register extends CI_Controller
	{
				
		public function data()		
		{			
			// tampung data
			$data['page'] = 'admin/pages/adminregister';
			$data['daftar'] = $this->user_model->show_daftar();	

			// load view
			$this->load->view('admin/admintemplate', $data);
		}

		public function delete($id)
		{	
			// panggil model untuk proses delete
			$this->user_model->delete($id);

			// kembali pada adminregisterdata
			redirect('admin/register/data');
		}
	}

?>