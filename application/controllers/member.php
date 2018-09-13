<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->database();
    }

public function manu()
	{
		$this->load->view('manu');
	}
	public function index()
	{
		$this->load->view('main_view');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function add_view()
	{
		$this->load->view('add_view');
	}
	public function agreed($id)
	{
		$sql="SELECT * FROM ground where id=$id ";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->row_array();

		$this->load->view('agreed_view',$data);
	}

	public function contact()
	{
		$this->load->view('contact_view');
	}




	public function chk_login()

	{	
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');

	$numr = $this->db->query("SELECT * from admin where name='$username' && password='$password'");
		$chknum = $numr->num_rows();
		if($chknum==1){ 

			foreach ($numr->result() as $row)
			{
			   
			    $name =$row->name;
				$id =$row->id;

			$data = array(
				'id'=>$id,
				'name'=>$name
						);
			//$this->session->set_userdata($data);

			//if($status=="admin"){
			redirect("member/index","refresh");
		///admin
			//if($status=="user"){
			//redirect("welcome/user_index","refresh");
		///user
		
		}
	}
	////user&pass OK
		else{
			echo "no";
			echo "SELECT * from admin where name='$username' && password='$password'";
		}
	
	
}













	public function table()
	{
		$sql ="SELECT * FROM ground";
			$rs=$this->db->query($sql);
			$data['rs']=$rs->result_array();
		$this->load->view("table_view",$data);

	}
	
	
	 public function information_view(){
			$sql ="SELECT * FROM ground";
			$rs=$this->db->query($sql);
			$data['rs']=$rs->result_array();
			$this->load->view("information_view",$data);
}

		 public function del($id){
		 	$this->db->delete('ground',array('id'=>$id));
		 	redirect("member/information_view","refresh");
		 	exit();
		 }
		 public function edit($id){
		 	$sql="SELECT * FROM ground where id=$id ";
		 	$rs=$this->db->query($sql);
		 	$data['rs']=$rs->row_array();
		 	$this->load->view("edit_view",$data);
		 
		 }

		

		 public function update($id){
		 	
		 	$data=array(
		 	'Ground_name'=>$this->input->post('Ground_name'),
		 	'Description'=>$this->input->post('Description'),
		 	'time'=>$this->input->post('time'),
		 	'Price'=>$this->input->post('Price')		 	
		 	);
		 	$this->db->where('id',$id);
		 	
		 	$this->db->update('ground',$data);
		 	redirect("member/information_view","refresh");
		 	exit();
		
		 }

		 	
public function editshow($id){
		 	$sql="SELECT * FROM ground where id=$id ";
		 	$rs=$this->db->query($sql);
		 	$data['rs']=$rs->row_array();
		 	$this->load->view("agreed_view",$data);
		 
		 }



		 	public function add(){
		 	$data=array(
			'id'=>$this->input->GET('id'),
			'Ground_name'=>$this->input->GET('Ground_name'),
			'Description'=>$this->input->GET('Description'),
			'time'=>$this->input->GET('time'),
			'Price'=>$this->input->GET('Price')
			);
			$this->db->insert("ground",$data);
			

			redirect("member/information_view","refresh");

			exit();
		 	
		 	}
		public function add_report(){

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		if($name ==''){
			echo "กรุณากรอกข้อมูลให้ครบ";
		
			
		}
		else{
		$sql = "INSERT INTO report (name,ground_id) Values ('$name','$id') ";
		$rs=$this->db->query($sql);


		$sql2 = "SELECT * FROM report as r INNER JOIN ground as g ON (r.ground_id= g.id) ";
		
			$rs2=$this->db->query($sql2);
			$data2['rs']=$rs2->result_array();

		$this->load->view('report',$data2);
		}
		}

		public function show_report(){
		{
			$sql2 = "SELECT * FROM report as r INNER JOIN ground as g ON (r.ground_id= g.id) ";
		
			$rs2=$this->db->query($sql2);
			$data2['rs']=$rs2->result_array();

		$this->load->view('report',$data2);
		}
		 
		
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */