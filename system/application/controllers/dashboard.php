<?php

class Dashboard extends Controller
{
	function Dashboard()
	{
		parent::Controller();
	}
	
	function index()
	{
		$this->load->view('dashboard.php');
	}
}

?>
