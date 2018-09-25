<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class About extends MY_Controller {

	public function index()
	{
		$this->render('about', 'full_width');
	}
}
