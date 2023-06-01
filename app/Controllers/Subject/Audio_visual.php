<?php 
namespace App\Controllers\Subject;

use App\Middleware\Authenticated;

class Audio_visual extends Authenticated
{
	public function index()
	{
		return view('users/video/index');
	}
}
