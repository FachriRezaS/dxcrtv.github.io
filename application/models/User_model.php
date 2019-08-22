<?php  

/**
 * 
 */
class User_model extends CI_Model
{	
	public function get_user_by_email_password($email = '', $password = '')
	{
		return $this->db->get_where(
			'admin', 
			array(
				'email' => $email, 
				'password' => sha1($password)
			)
		)->row(); 
	}

	public function register($data = array())
	{
		$this->db->insert('admin', $data);
	}

	public function daftar($data = array())
	{
		$this->db->insert('register', $data);
	}

	public function show_daftar()
	{
		return $this->db->get('register')->result();
	}

	public function delete($id = NULL)
	{
		$this->db->delete('register', array('id'=> $id));
		// delete from register where id =id
	}
}

?>
