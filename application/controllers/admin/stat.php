<?php
class stat extends Admin_Controller {
	function __Construct() {
        parent::__construct();
		$this->load->model('sitestat');
		$this->load->model('goods_model');
    }
	
	public function index()
	{
        $this->data['goods'] = $this->goods_model->get();
		$this->data['subview'] = 'admin/stat';
		$this->load->view('admin/layout_main',$this->data);
	
		
	}


		
	}              
	
?>