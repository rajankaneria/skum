<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Why_SKUM extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Why SKUM",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "why_skum",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
