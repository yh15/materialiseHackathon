<?php
class dbcontroltest extends CI_Controller {

        public function index()
        {
				$this->load->model('dbquery');
				$searchterm = 'orange'; //term to search
				$sel = 'name'; //name:name, cat:category
				
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