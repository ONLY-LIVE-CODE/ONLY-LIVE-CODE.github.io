<?php
class users extends MY_Model {
	protected $table_name = 'users';
	public $rules = array(
	'email' => array('field' => 'email', 'label' => 'email', 'rules' => 'trim|required|max_length[100]|xss_clean'),
	'password' => array('field' => 'password', 'label' => 'password', 'rules' => 'trim|required'),
	'name' => array('field' => 'name', 'label' => 'name', 'rules' => 'trim|required'),
	'group' => array('field' => 'group', 'label' => 'group', 'rules' => 'trim|required'),
	);
	
	public function get_new() {
		$kupon = new stdClass();
		$kupon->kupon_name = '';
		$kupon->percentage = '';
		$kupon->pago = '';
		return $kupon;
	}
	public function get_nested() {
		$table = $this->db->get('u')->result();
		if(count($table))
		{
		foreach($table as $key=>$item) {
			$ret[] = array(
			'kupon_name' => $item->kupon_name,
			'percentage' => $item->percentage,
			'pago' => $item->pago,
			);
		}
		}
		else
		{
			$ret = 'Записи отсутствуют!';
		}
		return $ret;
	}
}
?>