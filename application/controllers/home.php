<?php

class Home extends CI_Controller{
	public function index(){
		$this->load->view('layouts/head.inc.php');
		$this->load->view("home/home");
		$this->load->view('layouts/footer');
	}
	public function admin(){
		if (isset($this->session->userdata('user_info')['is_admin']) && $this->session->userdata('user_info')['is_admin'] == 1){
			$result = $this->get_all_users();
			$data['results'] = $result;
			$this->load->view('layouts/head.inc.php');
			$this->load->view("admin/index",$data);
			$this->load->view('layouts/footer');

		}else{
			redirect('/');
		}
	}

	function get_all_users(){
		$this->load->model('login');
		$result = $this->login->get_all_users();
		return $result;
	}

	public function profile(){
		echo "this is your profile";
	}

	public function login(){
		$this->load->view('layouts/head.inc.php');
		$this->load->view('login/login');
		$this->load->view('layouts/footer');
	}
		public function process_login(){
			$this->load->model('login');
			$result = $this->login->process_login($this->input->get('email'),$this->input->get('password'));

			if (!$result){
				redirect("/");

			}else{
				$this->session->set_userdata('user_info',array('id'=>$result[0]->id,'first_name'=>$result[0]->first_name,'is_admin'=>$result[0]->is_admin));
				redirect("/");
			}
		}

	public function logout(){
		$this->session->sess_destroy();
		redirect("/");
	}

	public function signup(){
		echo "this is your signup";
	}
}
