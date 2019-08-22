<?php  

	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		public function index()
		{			
			$data['page'] = 'admin/pages/admindashboard';
			if (! $this->session->userdata('is_login')) redirect('user/login');
			$this->load->view('admin/admintemplate', $data);
		}
	}

?>