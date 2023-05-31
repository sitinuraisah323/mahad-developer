<?php 
namespace App\Controllers\Dataumum;

use App\Middleware\Authenticated;

class Guru extends Authenticated
{
	public function index()
	{
		return view('users/dataumum/index');
	}
}
