<?php 
namespace App\Controllers\Schedule;
use App\Middleware\Authenticated;

class Schedules extends Authenticated
{
	public function index()
	{
		return view('administrator/schedules/index');
	}

	public function users()
	{
		return view('users/schedules/index');
	}
}
