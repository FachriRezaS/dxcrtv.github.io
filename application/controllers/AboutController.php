<?php  
/**
 * 
 */
class AboutController extends CI_Controller
{
	
	public function index()
	{
		$data['pages'] = 'pages/about';
 		$data['title'] = 'Daxcreative-about';
 		$this->load->view('template', $data);
	}
}
?>