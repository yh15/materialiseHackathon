<?php
class resultcontrol extends CI_Controller {

        public function index()
        {
				$target = $_GET["article"];
				$data['article'] = 'http://localhost/materialiseHackathon/'.$target.'';
                $this->load->view('conversion2',$data);
        }
}