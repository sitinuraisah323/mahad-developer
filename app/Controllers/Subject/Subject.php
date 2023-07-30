<?php 
namespace App\Controllers\Subject;

use App\Middleware\Authenticated;

class Subject extends Authenticated
{
	public function index()
	{
		return view('users/subject/index');
	}
	
	public function detail()
	{
		return view('users/subject/detail');
	}
}
