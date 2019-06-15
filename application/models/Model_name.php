<?php 
	
	class Model_name extends CI_Model {

		public function get_post() {

			$this->load->database();
			
			$query = $this->db->get('post');
			return $query->result_array(); 
		}

	}

?>