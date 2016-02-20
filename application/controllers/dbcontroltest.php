<?php
class dbcontroltest extends CI_Controller {

        public function index()
        {
                $this->load->database();
				$this->load->model('dbquery');
				$name = 'apple';
				
				$this->dbquery->dbsearch($name);
				
        }
}