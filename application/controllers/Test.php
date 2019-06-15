<!DOCTYPE html>
<html>
<head>
	<title>Test Controller</title>
</head>
<body>

</body>
</html>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Test extends CI_Controller {
		function index() {
			echo "this is index function of test controller";
		}

		function myFun() {
			echo "this is myFun function of test controller";
		}
	}


 ?>