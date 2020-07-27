<?php
class templates extends Admin_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('templates_model');
		if ($this->session->userdata('id') != 45) show_404();
    }
	public function index()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('templates'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/index');

					}
		
		}

		
		
	$this->data['subview'] = 'admin/templates/index';
	
	$this->load->view('admin/layout_main',$this->data);

		
	}
	
	public function elegant()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('elegantfon','elegant_info','elegant_kontakt','elegant_read','elegant_logo','elegant_onas','banner_lev','banner_niz'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/elegant');

					}
		
		}

		$this->data['subview'] = 'admin/templates/elegant';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}
	
		public function universal()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('universal_fon','universal_onas','universal_kontakt'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/universal');

					}
		
		}

		$this->data['subview'] = 'admin/templates/universal';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}
	
	public function premium()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('premium_fon','premium_logo','premium_logoz'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/premium');

					}
		
		}

		$this->data['subview'] = 'admin/templates/premium';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}
	
	
	public function perfect()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('perfect_fon','perfect_logo'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/perfect');

					}
		
		}

		$this->data['subview'] = 'admin/templates/perfect';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}
	
	public function boxy()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('boxy_fon','boxy_logo'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/boxy');

					}
		
		}

		$this->data['subview'] = 'admin/templates/boxy';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}
	
	public function mamba()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('mamba_fon','mamba_logo'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/mamba');

					}
		
		}

		$this->data['subview'] = 'admin/templates/mamba';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}
	
	
	public function game()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('game_fon','game_logo'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/game');

					}
		
		}

		$this->data['subview'] = 'admin/templates/game';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}

	
		public function lite()
	{
	
		if ($this->input->post('submit'))
		{

		
				$rules = $this->templates_model->rules;
				$this->form_validation->set_rules($rules);

				if($this->form_validation->run() == TRUE)
				 {

				 	$data = $this->templates_model->array_from_post(array('lite_kontakt','lite_logo'));
						
					$this->templates_model->update_config($data);
					$this->data['ok'] = TRUE;
					redirect('admin/templates/lite');

					}
		
		}

		$this->data['subview'] = 'admin/templates/lite';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}

		
	}              
	
?>