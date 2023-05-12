<?php 
namespace App\Controllers\Datamaster;
use App\Middleware\Authenticated;

class Users extends Authenticated
{
	public function index()
	{
		return view('users/index');
	}
	public function create()
	{
		return view('users/add');
	}
}
