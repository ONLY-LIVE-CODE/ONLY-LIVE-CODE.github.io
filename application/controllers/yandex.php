<?php

class yandex extends Admin_Controller {
	function __Construct() {
		 parent::__construct();
		$this->load->model('siteconfig');
		$this->load->helper('yad_helper');
	}

	function index() {
		$clid = config_item('yad_client_id');
		$token = config_item('yad_token');


		if ((empty($token) && !empty($clid) )) {
			create_cid( $clid );
			return null;
		}


		if(empty($clid)) {
			echo 'Установите верный Client ID в настройках скрипта! </br> <a href="/admin/config">Вернуться в админ-панель</a>';
		}

	}

	function token() {
		$clid = config_item('yad_client_id');
		$token = config_item('yad_token');

		if (empty( $token )) {
		   $code = $_GET['code'];
			$token = create_token( $clid, $code );

			if ((!empty( $token['token']) && !empty($token['wallet']))) {
				$this->siteconfig->save('yad_token',$token['token'] );
				$this->siteconfig->save('yad_wallet',$token['wallet'] );
				echo 'Яндекс успешно настроен! </br> <a href=\'/admin\'>Вернуться в админ-панель</a>';
				return null;
			}

			echo $token['error'];
		}

	}
}

?>
