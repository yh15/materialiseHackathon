<?php
class dbquery extends CI_Model {

		public function __construct()
		{
			//CI Model constructor
			parent::__construct();
		}
		
		
        public function searchByName($searchterm)
        {		
			$this->db->select('ar_loc');
			$this->db->from('datatable');
			$this->db->where('ob_name',$searchterm);
			$query = $this->db->get();
			
			if ($query->num_rows() > 0){
				$data = array_shift($query->result_array());
				return $data['ar_loc'];
			}
			else{
			return NULL;
    }	

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