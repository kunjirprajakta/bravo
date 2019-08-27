<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Masters_academic_year extends CI_Controller
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
			$data['add_year']	= base_url().'index.php/Masters_academic_year/add_year';
            $data['delete_academic_year']	= base_url().'index.php/Masters_academic_year/delete_academic_year';
            $data['academic_years_list'] = $this->Common_model->getAll("academic_years")->result_array();
           
            $this->load->view('common/header');
            $this->load->view('common/nav',$data);
            $this->load->view('masters_academic_year',$data);
            $this->load->view('common/footer');
			
		
    }
    


    public function add_year(){
        $data=$this->input->post();
        $year=$data['from_year'].'-'.$data['to_year'];
        $insert=$this->Common_model->insert("academic_years",array('year'=>$year));
        redirect(base_url('index.php/masters_academic_year'));
    }


    public function delete_academic_year(){
        $id=$this->input->post('id');
        $delete=$this->Common_model->delete("academic_years",array('id'=>$id));
        redirect(base_url('index.php/masters_academic_year'));
    }
}