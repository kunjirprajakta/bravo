<?php
class Add_user_model extends CI_Model {
	function __construct()
	{
		
		//call the model constructor
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
	}
	public function add_cred($username,$password,$type,$department,$college,$email,$fullName,$mobile){
		$data=array('username' =>$username ,'password'=>$password,'type'=>$type,'fullname'=>$fullName,'department_id'=>$department,'college_id'=>$college,'email'=>$email,'mobile'=>$mobile);
		$query=$this->db->insert('users',$data);
		return;
	}
	public function update_cred($id,$username,$password,$type,$department,$college,$email,$fullName,$mobile){
		$data=array('username' =>$username ,'password'=>$password,'type'=>$type,'fullname'=>$fullName,'department_id'=>$department,'college_id'=>$college,'email'=>$email,'mobile',$mobile);
		$this->db->where('id',$id);
		$query=$this->db->update("users",$data);
		return;
	}
}
?>