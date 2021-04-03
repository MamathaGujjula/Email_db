<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
        {
                $this->load->model('Registermodel');
                parent::__construct();
        }
	public function index($admin = 'register')
	{ 
        if ( ! file_exists(APPPATH.'views/'.$admin.'.php'))
        {
            show_404();
        }
        $data['title'] = $admin;/* should be there*/
        $this->load->view($admin, $data);
	}

    public function register()
	{ 
        $this->load->view('register');

	}  

    function register_db()
    {
       
        $data = array(  
            'id'     => $this->input->post('id'),  
            'email'  => $this->input->post('email'),  
            'password'   => $this->input->post('password'),  
            'confirm_password' => $this->input->post('password_confirm')  
            );  
    //insert data into database table.  
    $this->db->insert('users',$data);  

    redirect("register/index");  
    }  

} 
