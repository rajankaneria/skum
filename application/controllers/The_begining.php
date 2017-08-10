<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class The_begining extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "The Begining",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "the_begining",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
