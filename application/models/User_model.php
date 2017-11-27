<?php
class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		 public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 1);
                return $query->result();
        }


}
?>