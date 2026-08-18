<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {
	public function index() {
		// Create associative array with student data
		$student = [
			'student_id' => 'MCC2024-00051',
			'name'       => 'Von Roven A. Delos Santos',
			'course'     => 'BS Information Technology',
			'year'       => '3rd Year',
			'section'    => '3F2',
			'email'      => 'vonrovendelossantos12@gmail.com',
			'phone'      => '+09634013258',
			'address'    => 'Gintong Diwa St. Camilmil Calapan, Oriental Mindoro, Philippines'
		];
		
		// Pass data to view
		$this->call->view('student_page', $student);
	}
}
?>
