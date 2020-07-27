<?php
class robokassa extends FE_Controller
{
    function __Construct()
    {
        parent::__construct();
    }
    public function index()
    {
		
		if (empty($_REQUEST)) {exit('Error');}
        $mrh_pass2 = config_item('rk_password2');
        $crc = strtoupper($_REQUEST["SignatureValue"]);
		$inv_id = $_REQUEST["inv_id"];
		$out_summ = $_REQUEST["OutSum"];
        $my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2"));
        if ($my_crc == $crc){
			echo "OK$inv_id\n";
            mysql_query("UPDATE orders SET `rk`='1' WHERE rand='" . $inv_id . "'");
		} else {
			exit("bad sign\n"); 
		}
    }

}
?>