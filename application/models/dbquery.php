<?php
class dbquery extends CI_Model {

		public function __construct()
		{
			//CI Model constructor
			parent::__construct();
		}
		
		
        public function searchByName($searchterm)
        {		
			$this->db->select('*');
			$this->db->from('datatable');
			$this->db->like('ob_name',strtolower($searchterm));
			$query = $this->db->get();
				
			return $query->result();

        }
		public function searchByCat($searchterm)
		{
			$this->db->select('*');
			$this->db->from('datatable');
			$this->db->like('category',$searchterm);
			$query = $this->db->get();
				
			return $query->result();
		}
}
?>