<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salient_features extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Salient_Features",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "salient_features",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
