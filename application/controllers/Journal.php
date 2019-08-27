<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Journal extends CI_Controller
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
        if(!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
        }
        else{
			$data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
            
            $data['view_details']	= base_url().'index.php/Journal/view_details';
			$data['add_data']	= base_url().'index.php/Journal/add_data';
            $data['delete_data']= base_url().'index.php/Journal/delete_data';
            $data['edit_data']	= base_url().'index.php/Journal/edit_data';
            $data['verify_data']	= base_url().'index.php/Journal/verify_data';
            $data['edit_form']	= base_url().'index.php/Journal/edit_form';

            $data['department_list'] = $this->Common_model->getAll("departments")->result_array();
            $data['skill_list'] = $this->Common_model->getAll("Webinar")->result_array();
            $data['college_list'] = $this->Common_model->getAll("master_college")->result_array();
            $data['user_type_list'] = $this->Common_model->getAll("master_user_type")->result_array();
            $data['users_list'] = $this->Common_model->getAll("users")->result_array();
            $data['academic_year'] = $this->Common_model->getAll("academic_years")->result_array();
            $data['status_list'] = $this->Common_model->getAll("master_status")->result_array();
            $data['journal_list'] = $this->Common_model->getAll("journal")->result_array();
            $data['permission']	= base_url().'index.php/Users_management/permission';

            //getting data from permission table for this specific controller
            $data['permission']=$this->Common_model->getAll("permission",array('controller'=>$this->router->fetch_class()))->row_array();
            



            $this->load->view('common/header');
            $this->load->view('common/nav',$data);
            $this->load->view('journal',$data);
            $this->load->view('common/footer');

        }
    }


    public function verify_data(){
        $id=$this->input->post('id');
        $verify=$this->Common_model->update("journal",array('verified'=>'1'),array('id'=>$id));
        redirect(base_url('index.php/journal'));
    }

    public function view_details(){
        $id=$this->input->post('id');
        $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
        $data['view_details_info']=$this->Common_model->getAll("journal",array('id'=>$id))->row_array();
        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('journal_details',$data);
        $this->load->view('common/footer');
    }

    public function add_data(){
		if(isset($_FILES['files'])){
        //file upload start
            $config['upload_path']          = './uploads/journal/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 1000;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('files'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    echo $error['error'];
                    //$this->load->view('upload_form', $error);
            }
            else
            {
                    $data=$this->input->post();
                   // $sdt=explode('/',$data['start_date']);
                   //$edt=explode('/',$data['end_date']);
                   // $sdate=$sdt[2].'-'.$sdt[0].'-'.$sdt[1];
                  // $edate=$edt[2].'-'.$edt[0].'-'.$edt[1];
                 // $data['start_date']=$sdate;
                  //  $data['end_date']=$edate;
                  //  $file_upload     = array('upload_data' => $this->upload->data());
$data['file']    = $file_upload['upload_data']['file_name'];

                    $insert = $this->Common_model->insert("journal",$data);
		            redirect(base_url('index.php/journal'));
                    
            }
        //file upload end
        }//end isset FILES
        else{
            $data=$this->input->post();
            $sdt=explode('/',$data['start_date']);
            $edt=explode('/',$data['end_date']);
            $sdate=$sdt[2].'-'.$sdt[0].'-'.$sdt[1];
            $edate=$edt[2].'-'.$edt[0].'-'.$edt[1];
            $data['start_date']=$sdate;
            $data['end_date']=$edate;
        
            $insert = $this->Common_model->insert("journal",$data);
            redirect(base_url('index.php/journal'));

        }



    }

    public function edit_form(){
        $data=$this->input->post();
        $update=$this->Common_model->update("journal",$data,array('id'=>$data['id']));
        
		redirect(base_url('index.php/journal'));

    }
    
    public function edit_data(){

            $data['id']=$this->input->post('id');
            $id=$this->input->post('id');

            $data['verify_data']	= base_url().'index.php/Journal/verify_data';
            $data['view_details']	= base_url().'index.php/Journal/view_details';
            $data['edit_data']	= base_url().'index.php/Journal/edit_data';
            $data['edit_data_info'] = $this->Common_model->getAll("journal",array('id'=>$id))->row_array();
            $data['delete_data']= base_url().'index.php/Journal/delete_data';
            $data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $data['userinfo']	= $this->Common_model->getAll("users",array('id'=>$this->tank_auth->get_user_id()))->row_array();
            $data['skill_list'] = $this->Common_model->getAll("journal")->result_array();
			$data['add_user']	= base_url().'index.php/Journal/add_user';
            $data['delete_user']	= base_url().'index.php/Journal/delete_department';
            $data['edit_user']	= base_url().'index.php/Journal/edit_user';
            $data['department_list'] = $this->Common_model->getAll("departments")->result_array();
            $data['college_list'] = $this->Common_model->getAll("master_college")->result_array();
            $data['user_type_list'] = $this->Common_model->getAll("master_user_type")->result_array();
            $data['users_list'] = $this->Common_model->getAll("users")->result_array();
            $data['edit_form']	= base_url().'index.php/Journal/edit_form';
            $data['academic_year'] = $this->Common_model->getAll("academic_years")->result_array();
            $data['status_list'] = $this->Common_model->getAll("master_status")->result_array();
            $data['journal_list'] = $this->Common_model->getAll("journal")->result_array();
            $data['permission']	= base_url().'index.php/Users_management/permission';
            $data['permission']=$this->Common_model->getAll("permission",array('controller'=>$this->router->fetch_class()))->row_array();

        $this->load->view('common/header');
        $this->load->view('common/nav',$data);
        $this->load->view('journal',$data);
        $this->load->view('common/footer');
        
    }


    public function delete_data(){
        $id=$this->input->post('id');
        $delete=$this->Common_model->delete("journal",array('id'=>$id));
        redirect(base_url('index.php/journal'));
    }


}