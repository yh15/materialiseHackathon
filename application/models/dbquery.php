<?php
class dbquery extends CI_Model {

		public function __construct()
		{
			//CI Model constructor
			parent::__construct();
		}
		
		
        public function dbsearch($name)
        {		$this->db->select('ob_name','id','category');
				$this->db->from('datatable');
				$this->db->like('ob_name',$name);
				$query = $this->db->get();

				echo $query;
				foreach ($query->result() as $row)
				{	//no new line
					echo $row->ob_name;
					echo $row->id;
					echo $row->category;
				}
        }
}