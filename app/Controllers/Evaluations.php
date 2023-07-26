<?php 
namespace App\Controllers;

use App\Middleware\Authenticated;
use App\Models\Area;
use App\Models\Evaluation;
use App\Models\Subjects;
use App\Models\Notifications as ModelsNotifications;
use App\Models\pawn_transactionsModel;
use Prophecy\Doubler\ClassPatch\DisableConstructorPatch;
use CodeIgniter\Database\Postgre\Connection;


// use  CodeIgniter\Database\BaseConnection();
class Evaluations extends Authenticated
{

	//  private $db1;
  
    // private $db2;

    public function __construct()
    {
      $this->db1 = db_connect(); // default database group
      $this->dbtests      = \Config\Database::connect('tests');
      $this->dbaccounting = \Config\Database::connect('accounting');
      $session = \Config\Services::session();
		

		if (!$session) {

            redirect('');
        }
    }
	
	
	public function show($id_subject)
	{
    
    $evaluation = new Evaluation();
    $data['evaluation'] = $evaluation->getEvaluation($id_subject);
    $data['id_subject'] = $id_subject;
        
		return view('administrator/evaluation/index', $data);
	}

    public function users()
	{
        $subject = new Subjects();
        $data['subject'] = $subject->getSubject();
        
        return view('users/evaluation/index', $data);
    }
	
	
}

	
	