<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'Website PUPR',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> 'Adi, Heri dan Bina',
		'description'	=> 'Website Dinas PUPR Soreang',
		'keywords'		=> 'PHP,CodeIgniter,CRUD'
	),

	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
		),
		'foot'	=> array(
			'assets/dist/frontend/lib.min.js',
			'assets/dist/frontend/app.min.js'
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/frontend/lib.min.css',
			'assets/dist/frontend/app.min.css'
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	/**
	'languages' => array(
		'default'		=> 'id',
		'autoload'		=> array('general'),
		'available'		=> array(
			'en' => array(
				'label'	=> 'English',
				'value'	=> 'english'
			),
			'zh' => array(
				'label'	=> '繁體中文',
				'value'	=> 'traditional-chinese'
			),
			'cn' => array(
				'label'	=> '简体中文',
				'value'	=> 'simplified-chinese'
			),
			'es' => array(
				'label'	=> 'Español',
				'value' => 'spanish'
			),
			'id' => array(
				'label'	=> 'Indonesia',
				'value'	=> 'indonesia'
			),
		)
	),

	*/
	// Google Analytics User ID
	'ga_id' => '',

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> 'home',
			'icon'		=> '',
		),
		'contact_us' => array(
			'name'		=> 'Contact Us',
			'url'		=> 'contact',
			'icon'		=> '',
		),
		'about_us' => array(
			'name'		=> 'About Us',
			'url'		=> 'about',
			'icon'		=> '',
		),		
		'login' => array(
			'name'		=> 'Login',
			'url'		=> 'admin',
			'icon'		=> '',
		)
		
	),

	// Login page (to redirect non-logged-in users)
	'login_url' => 'admin',

	// Restricted pages to specific groups of users, which will affect sidemenu item as well
	// pages out of this array will have no restriction (except required admin user login)
	'page_auth' => array(
		// Example: Frontend Website pages for registered users
		'dashboard'					=> array('admin','staff'),
		'account'					=> array('admin','staff'),

		// Example: Admin Panel pages for admin users
		'user/create'				=> array('webmaster', 'admin'),
		'user/group'				=> array('webmaster', 'admin'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
	),

	// Email config
	/**'email' => array(
		'from_email'		=> '',
		'from_name'			=> '',
		'subject_prefix'	=> '',
		
		// Mailgun HTTP API
		'mailgun_api'		=> array(
			'domain'			=> '',
			'private_api_key'	=> ''
		),
	),
	*/
	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),

	/*
	| -------------------------------------------------------------------------
	| Configuration for Admin Panel only
	| -------------------------------------------------------------------------
	*/
	
	// AdminLTE settings
	// (admin user group => configuration, e.g. CSS class for skin)
	'adminlte' => array(
		'body_class' => array(
			'webmaster'	=> 'skin-red',
			'admin'		=> 'skin-purple',
			'manager'	=> 'skin-black',
			'staff'		=> 'skin-blue',
		)
	),

	// Useful links to display at bottom of sidemenu (e.g. to pages outside Admin Panel)
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'staff'),
			'name'		=> 'Frontend Website',
			'url'		=> '',
			'target'	=> '_blank',
			'color'		=> 'text-aqua'
		),
		/**
		array(
			'auth'		=> array('webmaster', 'admin'),
			'name'		=> 'API Site',
			'url'		=> 'api',
			'target'	=> '_blank',
			'color'		=> 'text-orange'
		),
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Github Repo',
			'url'		=> CI_BOOTSTRAP_REPO,
			'target'	=> '_blank',
			'color'		=> 'text-green'
		),
		*/
	),

	/*
	| -------------------------------------------------------------------------
	| Configuration for API Site only
	| -------------------------------------------------------------------------
	*/
	
	// Raw PHP Headers (e.g. enable CORS or not) to send at page start
	'headers' => array(
		'Access-Control-Allow-Origin: *',
		'Access-Control-Request-Method: GET, POST, PUT, DELETE, OPTIONS',
		'Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization',
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_frontend';