<?php
class dbcontroltest extends CI_Controller {

        public function index()
        {
				$this->load->model('dbquery');
				$searchterm = $_POST["term"]; //term to search
				$sel = $_POST["type"]; //name:name, cat:category
				
				if($sel=='name'){
					$data['results'] = $this->dbquery->searchByName($searchterm);
					$this->load->view('dbview',$data);
				}
				else if($sel=='cat')
				{
					$data['results'] = $this->dbquery->searchByCat($searchterm);
					$this->load->view('dbview',$data);
				}
        }
}
?>