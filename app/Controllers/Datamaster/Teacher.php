<?php 
namespace App\Controllers\Datamaster;

use App\Middleware\Authenticated;

class Teacher extends Authenticated
{
	public function index()
	{
		return view('teacher/index');
	}
}
