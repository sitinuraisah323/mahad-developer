<?php 
namespace App\Controllers\Datamaster;

use App\Middleware\Authenticated;

class Student extends Authenticated
{
	public function index()
	{
		return view('student/index');
	}
}
