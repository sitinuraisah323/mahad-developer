<?php 
namespace App\Controllers\Schedule;
use App\Models\Schedules;
use App\Middleware\Authenticated;

class Schedule extends Authenticated
{
	public function index()
	{
		return view('administrator/schedules/index');
	}

	public function users()
	{
		$schedule = new Schedules();
        $data['schedule'] = $schedule->getSchedul();
		var_dump($data);
		exit;
		return view('users/schedules/index', $data);
	}
}
