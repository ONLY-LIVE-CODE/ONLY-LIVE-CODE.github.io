<?php
class support extends Admin_Controller {
	function __Construct() {
        parent::__construct();
				$this->load->model('sitestat');
    }
	public function index()
	{
		
		$this->data['subview'] = 'admin/support';
		$this->load->view('admin/layout_main',$this->data);
		
	}
		
	}              
	
?>