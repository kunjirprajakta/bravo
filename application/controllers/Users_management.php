<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users_management extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->library('tank_auth');
        $this->load->model('Add_user_model');
        
        //for password encryption
	    $this->ci =& get_instance();
		$this->ci->load->config('tank_auth', TRUE);
		$this->ci->load->library('session');
		$this->ci->load->database();
		$this->ci->load->model('tank_auth/users');
		//password
		
	   
	}

	function index()
	{
        
        if(!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
        }
        else{
			$data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
            $data['add_user']	= base_url().'index.php/Users_management/add_user';
            $data['delete_user']	= base_url().'index.php/Users_management/delete_user';
            $data['edit_user']	= base_url().'index.php/Users_management/edit_user';
            $data['department_list'] = $this->Common_model->getAll("departments")->result_array();
            $data['college_list'] = $this->Common_model->getAll("master_college")->result_array();
            $data['user_type_list'] = $this->Common_model->getAll("master_user_type")->result_array();
            $data['users_list'] = $this->Common_model->getAll("users")->result_array();
            $data['edit_form']	= base_url().'index.php/Users_management/edit_form';
            $data['bann_user']	= base_url().'index.php/Users_management/bann_user';
            $data['permission']	= base_url().'index.php/Users_management/permission';
            $data['permission_details'] = $this->Common_model->getAll("permission")->result_array();



            $this->load->view('common/header');
            $this->load->view('common/nav',$data);
            $this->load->view('users_management',$data);
            $this->load->view('common/footer');
        }
		
    }
    public function add_user(){
		$data=$this->input->post();
		
		$username=$data['email'];
		$password=$data['password'];
		$hasher = new PasswordHash(
					$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
					$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
        $hashed_password = $hasher->HashPassword($password);
       
        $authentication_data=$this->Add_user_model->add_cred($username,$hashed_password,$data['type'],$data['department_id'],$data['college_id'],$data['email'],$data['fullname'],$data['mobile']);
		redirect(base_url('index.php/users_management'));

    }

    public function edit_form(){
		$data=$this->input->post();
		
		$username=$data['email'];
		$password=$data['password'];
		$hasher = new PasswordHash(
					$this->ci->config->item('phpass_hash_strength', 'tank_auth'),
					$this->ci->config->item('phpass_hash_portable', 'tank_auth'));
        $hashed_password = $hasher->HashPassword($password);
       
        $update=$this->Common_model->update("users",array('username'=>$username,'password'=>$hashed_password,'type'=>$data['type'],'department_id'=>$data['department_id'],'college_id'=>$data['college_id'],'email'=>$data['email'],'fullname'=>$data['fullname'],'mobile'=>$data['mobile']),array('id'=>$data['id']));
		redirect(base_url('index.php/users_management'));

    }
    
   public function edit_user(){

            $data['id']=$this->input->post('id');
            $id=$this->input->post('id');
            $data['edit_data'] = $this->Common_model->getAll("users",array('id'=>$id))->row_array();
            $data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
            
			$data['add_user']	= base_url().'index.php/Users_management/add_user';
            $data['delete_user']	= base_url().'index.php/Users_management/delete_department';
            $data['edit_user']	= base_url().'index.php/Users_management/edit_user';
            $data['department_list'] = $this->Common_model->getAll("departments")->result_array();
            $data['college_list'] = $this->Common_model->getAll("master_college")->result_array();
            $data['user_type_list'] = $this->Common_model->getAll("master_user_type")->result_array();
            $data['users_list'] = $this->Common_model->getAll("users")->result_array();
            $data['edit_form']	= base_url().'index.php/Users_management/edit_form';
            $data['bann_user']	= base_url().'index.php/Users_management/bann_user';
            $data['permission']	= base_url().'index.php/Users_management/permission';
            $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
            $data['permission_details'] = $this->Common_model->getAll("permission")->result_array();


        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('users_management',$data);
        $this->load->view('common/footer');
        
    }


    public function delete_user(){
        $id=$this->input->post('id');
        $delete=$this->Common_model->delete("users",array('id'=>$id));
        redirect(base_url('index.php/users_management'));
    }
    public function bann_user(){
        $id=$this->input->post('id');
        $banned=$this->Common_model->update("users",array('banned'=>'1'),array('id'=>$id));
        //$data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();

        redirect(base_url('index.php/users_management'));
    }
    public function permission(){
        $data['id']=$this->input->post('id');
       
        $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
        $data['permission_details'] = $this->Common_model->getAll("permission")->result_array();

        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('permission',$data);
        $this->load->view('common/footer');
        
}
}