<?php
class DatabaseTest extends CI_Controller {

        public function index()
        {
                $this->load->database();
				$query = $this->db->query('SELECT ob_name, id, category FROM datatable');

				foreach ($query->result() as $row)
				{	//no new line
					echo $row->ob_name;
					echo $row->id;
					echo $row->category;
				}

				echo 'Total Results: ' . $query->num_rows();
        }
}