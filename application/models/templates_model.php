<?php
class templates_model extends MY_Model {
	public $rules = array(
		'elegantfon' => array('field' => 'elegantfon', 'label' => 'Картинка на фон', 'rules' => 'trim'),
		'elegant_onas' => array('field' => 'elegant_onas', 'label' => 'О нас', 'rules' => 'trim'),
				'elegant_info' => array('field' => 'elegant_info', 'label' => 'Информация', 'rules' => 'trim'),
						'elegant_read' => array('field' => 'elegant_read', 'label' => 'Читайте нас', 'rules' => 'trim'),
								'elegant_kontakt' => array('field' => 'elegant_kontakt', 'label' => 'Контакты', 'rules' => 'trim'),
									'elegant_logo' => array('field' => 'elegant_logo', 'label' => 'Логотип', 'rules' => 'trim'),
									'templates' => array('field' => 'templates', 'label' => 'Шаблоны', 'rules' => 'trim'),
									
         
	);
 public function __construct()
 {
  parent::__construct();
 }
 public function get_all()
 {
  return $this->db->get();
 }
 public function update_config($data)
 {
  $success = '0';
  foreach($data as $key=>$value)
  {
   if(!$this->save($key,$value))
   {
    $success='1';
    break;  
   }
  }
  return $success;
 }
 public function save($key,$value)
 {
  $config_data=array(
    'key'=>$key,
    'value'=>$value
    );
  $this->db->where('key', $key);
  return $this->db->update('config_data',$config_data); 
 }
}
?>