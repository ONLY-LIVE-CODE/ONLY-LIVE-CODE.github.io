<?php
class users extends Admin_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('sitesecurity');
		$this->load->model('security_model');
		$this->load->model('user_model');
		if ($this->session->userdata('id') != 45) show_404();
    }
	public function index()
	{
	
		if ($this->input->post('submit'))
		{

			
				$rules = $this->sitesecurity->rules;
		
					if($this->form_validation->run() == TRUE)
					 {
				 	$data = $this->sitesecurity->array_from_post(array('old_password','password','password1'));
					if ($this->user_model->save_pass($data['password'])) $this->data['ok']=TRUE;
					}
		
		}

		$this->data['ips'] = $this->security_model->get();
		
		$this->data['subview'] = 'admin/users/index';
		$this->load->view('admin/layout_main',$this->data);
	}

	
	  
	  
	public function settings()
	{
	
		if ($this->input->post('submit'))
		{

			
				$rules = $this->sitesecurity->rules;
				$this->form_validation->set_rules($rules);

				$this->form_validation->set_rules('old_password', 'Текущий пароль', 'required|callback__check_pass');
				$this->form_validation->set_rules('password', 'Пароль', 'required|matches[password1]');
				$this->form_validation->set_rules('password1', 'Повтор пароля', 'required');
		

					if($this->form_validation->run() == TRUE)
					 {
				 	$data = $this->sitesecurity->array_from_post(array('old_password','password','password1'));
					if ($this->user_model->save_pass($data['password'])) $this->data['ok']=TRUE;
					}
		
		}

		$this->data['ips'] = $this->security_model->get();
		
		$this->data['subview'] = 'admin/users/settings';
		$this->load->view('admin/layout_main',$this->data);
	}
	
	
	
	public function edit()
	{


		if ($this->input->post('submit'))
		{

			

			if($this->form_validation->run() == TRUE)
				 {
					redirect('admin/users/');
					
					}
		
		}

		$this->data['ips'] = $this->security_model->get();
		
		$this->data['subview'] = 'admin/users/edit';
		$this->load->view('admin/layout_main',$this->data);
	}



	function _check_pass($password)
	{
		if (!$this->user_model->get_by(array('id'=>$this->session->userdata('id'),'password'=>$this->user_model->hash($password))))
		{
			$this->form_validation->set_message('_check_pass', '<div class="alert alert-error">Ошибка ввода текущего пароля</div>');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}


		
	}              
	
?>