<?php  
/**
 * 
 */
class RegisterController extends CI_Controller
{	

	public function index()
	{
		$data['pages'] = 'pages/register';
	 	$data['title'] = 'Daxcreative-register';
	 	$this->load->view('template', $data);	

	}
	
	public function insert()
	{
		$this->form_validation->set_rules('namadepan', 'Namadepan', 'required');
		$this->form_validation->set_rules('namabelakang', 'Namabelakang', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|Valid_email');
		$this->form_validation->set_rules('telpon', 'Telpon', 'required');
		$this->form_validation->set_rules('event', 'Event', 'required');
		$this->form_validation->set_rules('tema', 'Tema', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		$this->form_validation->set_rules('detail', 'Detail', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pages/register');
		} else {
			$data = array(
				'nama_depan' => $this->input->post('namadepan'),
				'nama_belakang' => $this->input->post('namabelakang'),
				'email' => $this->input->post('email'),
				'nomor_telpon' => $this->input->post('telpon'),
				'nama_event' => $this->input->post('event'),
				'tema_event' => $this->input->post('tema'),
				'lokasi' => $this->input->post('lokasi'),
				'detail_event' => $this->input->post('detail')
			);

			$this->user_model->daftar($data);

			$this->session->set_flashdata('success', 'Terima kasih. Data anda telah terkirim.');			

			redirect('RegisterController');			
		}
	}
}
?>