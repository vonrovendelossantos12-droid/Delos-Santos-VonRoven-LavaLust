<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware {
	
	public function __construct() {
		// Initialize session if not already started
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
	}
	
	/**
	 * Handle the request
	 * Check if student access is allowed
	 */
	public function handle() {
		// Check if student access is allowed
		if (isset($_SESSION['student_access']) && $_SESSION['student_access'] === true) {
			// Access allowed, continue to controller
			return true;
		}
		
		// Access not allowed, redirect to student page
		redirect('student');
	}
}
?>
