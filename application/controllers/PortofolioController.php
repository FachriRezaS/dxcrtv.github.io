<?php  
/**
 * 
 */
class PortofolioController extends CI_Controller
{
	
	public function index()
	{
		$data['pages'] = 'pages/portofolio';
 		$data['title'] = 'Daxcreative-portofolio';
 		$this->load->view('template', $data);
	}
}
?>