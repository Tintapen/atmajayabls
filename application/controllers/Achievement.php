<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Achievement extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->template->load('overview', 'achievement/v_achievement');
	}
}