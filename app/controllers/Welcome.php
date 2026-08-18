<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once __DIR__ . '/../app/config/routes.php';

class Welcome extends Controller {
	public function index() {
		$this->call->view('welcome_page');
	}
}
?>