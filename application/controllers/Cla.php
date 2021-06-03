<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cla extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->template->load('overview', 'cla/v_cla');
	}
}