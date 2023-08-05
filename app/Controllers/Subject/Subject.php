<?php 
namespace App\Controllers\Subject;
use App\Models\Subjects;
use App\Middleware\Authenticated;

class Subject extends Authenticated
{
	public function index()
	{
		$subject = new Subjects();
        $data['subject'] = $subject->getSubject();
		return view('users/subject/index', $data);
	}
	
	public function detail()
	{
		return view('users/subject/detail');
	}
}
