<?php 
class Auth extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($username,$password,$nama,$email,$no_hp)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>md5($password),
			'nama'=>$nama,
            'email'=>$email,
            'no_hp'=>$no_hp,

            'status' => 1
		);
		$this->db->insert('user_app',$data_user);
	}

	function login_user($username,$password)
	{
        $query = $this->db->get_where('user_app',array('username'=>$username));
        if($query->num_rows() > 0)
        {
           
            $data_user = $query->row();
            if (md5($password) == $data_user->PASSWORD) {
                $this->session->set_userdata('username',$USERNAME);
				$this->session->set_userdata('nama',$data_user->NAMA);
                $this->session->set_userdata('id_user',$data_user->ID_USER);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
               
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
?>