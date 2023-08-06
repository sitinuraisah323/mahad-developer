<?php 
namespace App\Controllers\Subject;
use App\Models\Subjects;

use App\Middleware\Authenticated;
use App\Models\DetailSubjects;

class Subject extends Authenticated
{
	public function index()
	{
		$subject = new Subjects();
		$detail = new DetailSubjects();
        $data['subject'] = $subject->getSubject();
		$data['detail'] = $detail->getDetail();
		// var_dump($data['detail']);
		// exit;
		return view('users/subject/index', $data);
	}
	
	public function detail()
	{
		return view('users/subject/detail');
	}
}
