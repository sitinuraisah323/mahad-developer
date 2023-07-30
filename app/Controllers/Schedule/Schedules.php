<?php 
namespace App\Controllers;
use App\Models\Subjects;
use App\Middleware\Authenticated;

class Schedules extends Authenticated
{
	public function index()
	{
		return view('administrator/schedules/index');
	}

	public function show($id_subject)
	{
    
    $evaluation = new Evaluation();
    $data['schedules'] = $evaluation->getEvaluation($id_subject);
    $data['id_subject'] = $id_subject;
        
		return view('administrator/evaluation/index', $data);
	}

    public function users()
	{
        $subject = new Subjects();
        $data['subject'] = $subject->getSubject();
        
        return view('users/schedules/index', $data);
    }
}
