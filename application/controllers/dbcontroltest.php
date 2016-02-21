<?php
class dbcontroltest extends CI_Controller {
	
		function __construct()
		{
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
		}

        public function index()
        {
				$this->load->model('dbquery');
				$searchterm = $_POST["term"]; //term to search
				$sel = 'name';//$_POST["type"]; //name:name, cat:category
				
				$this->load->view('dbsearch');
				
				if($sel=='name'){
					$data = $this->dbquery->searchByName($searchterm);
					if (isset($data)){
						$url = 'http://localhost/materialiseHackathon/'.$data.'.txt';
						redirect($url);
					}
					else{
						redirect('http://localhost/materialiseHackathon/index.html');
    }
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