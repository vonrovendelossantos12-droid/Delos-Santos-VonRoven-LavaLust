<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {
	public function index() {
		// Create associative array with student data
		$student = [
			'student_id' => '2026-0001',
			'name'       => 'Juan Dela Cruz',
			'course'     => 'BS Information Technology',
			'year'       => '2nd Year',
			'section'    => 'A',
			'email'      => 'juan@example.com',
			'phone'      => '+63 917 123 4567',
			'address'    => 'Manila, Philippines'
		];
		
		// Pass data to view
		$this->call->view('student_page', $student);
	}

	public function profile() {
		// Set session variable to indicate access is allowed
		$_SESSION['student_access'] = true;
		
		// Create associative array with student data
		$student = [
			'student_id' => '2026-0001',
			'name'       => 'Juan Dela Cruz',
			'course'     => 'BS Information Technology',
			'year'       => '2nd Year',
			'section'    => 'A',
			'email'      => 'juan@example.com',
			'phone'      => '+63 917 123 4567',
			'address'    => 'Manila, Philippines'
		];
		
		// Pass data to view
		$this->call->view('student_profile', $student);
	}
}
?>
