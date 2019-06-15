<!DOCTYPE html>
<html>
<head>
	<title>Cart Library</title>
</head>
<body>

</body>
</html>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Shopping extends CI_Controller {
		function index() {


			$this->load->library('cart');
			$this->load->helper('form');

			$data = array(
                                
                                array(
                                        'id'      => 'sku_123ABC',
                                        'qty'     => 1,
                                        'price'   => 39.95,
                                        'name'    => 'T-Shirt',
                                        'options' => array('Size' => 'L', 'Color' => 'Red')
                                ),
                                array(
                                        'id'      => 'sku_567ZYX',
                                        'qty'     => 1,
                                        'price'   => 9.95,
                                        'name'    => 'Coffee Mug'
                                ),
                                array(
                                        'id'      => 'sku_965QRS',
                                        'qty'     => 1,
                                        'price'   => 29.95,
                                        'name'    => 'Shot Glass'
                                )
                        );


			$this->cart->insert($data);

			$this->load->view('shopping_cart',$data);
		}

		// function myFun() {
		// 	echo "this is myFun function of test controller";
		// }
	}


 ?>