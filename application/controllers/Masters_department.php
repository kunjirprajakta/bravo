<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Masters_department extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('tank_auth');
		
	   
	}

	function index()
	{
		
			$data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
			$data['add_department']	= base_url().'index.php/Masters_department/add_department';
            $data['delete_department']	= base_url().'index.php/Masters_department/delete_department';
            $data['department_list'] = $this->Common_model->getAll("departments")->result_array();
           
            $this->load->view('common/header');
            $this->load->view('common/nav',$data);
            $this->load->view('masters_department',$data);
            $this->load->view('common/footer');
			
		
    }
    


    public function add_department(){
        $data=$this->input->post();
      
        $insert=$this->Common_model->insert("departments",$data);
        redirect(base_url('index.php/masters_department'));
    }


    public function delete_department(){
        $id=$this->input->post('id');
        $delete=$this->Common_model->delete("departments",array('id'=>$id));
        redirect(base_url('index.php/masters_department'));
    }
}