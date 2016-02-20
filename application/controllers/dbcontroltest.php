<?php
class dbcontroltest extends CI_Controller {

        public function index()
        {
                $this->load->database();
				$this->load->model('dbquery');
				$name = 'apple';
				
				$data['results'] = $this->dbquery->dbsearch($name);
				$this->load->view('dbview',$data);
        }
}
?>