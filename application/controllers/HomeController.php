<?php  

/**
 * 
 */
class HomeController extends CI_Controller
{
	
	public function index()
	{
		$data['pages'] = 'pages/index';
 		$data['title'] = 'Daxcreative-Home';
 		$this->load->view('template', $data);
 	
	}
}

?>