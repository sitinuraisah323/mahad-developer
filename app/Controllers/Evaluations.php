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
use PharIo\Manifest\Library;
use TCPDF;

// use  CodeIgniter\Database\BaseConnection();
class Evaluations extends Authenticated
{

	//  private $db1;
  
    // private $db2;

    public function __construct()
    {
        $library = new Library;
        $library->library('Pdf');
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
	
    public function preview()
    {

        $evaluation = $this->getEvaluation();
        echo $data; exit;
        $html = 'yes';
        $pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Dea Venditama');
		$pdf->SetTitle('Invoice');
		$pdf->SetSubject('Invoice');

		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->addPage();

		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		//line ini penting
		$this->response->setContentType('application/pdf');
		//Close and output PDF document
		$pdf->Output('invoice.pdf', 'I');
    }

    public function getEvaluation()
    {
        // echo 'Yes'; exit;
        if(is_null(session()->get('logged_in'))){            
            return $this->sendResponse('No Autheticated',403,'No Autheticated');
            die;
        }
        if($this->model){
            $this->where();
            
            $start = $this->request->getGet('start') ? $this->request->getGet('start') : 0;
            $length = $this->request->getGet('length') ? $this->request->getGet('length') : 10;

            $this->model->select('*,evaluations.id as ids,evaluations.description as descript, visitors.name as fullname, subject.name as subject' )
                                ->join('subject', 'subject.id=evaluations.id_subject')
                                ->join('users', 'users.id=evaluations.id_user')
                                ->join('visitors', 'visitors.id=users.id_visitor');
            if(session('user.level') == 'Murid'){
             $this->model->where('users.id', session('user.id_user'));
            } 
            $data = $this->model->orderBy($this->model->table.'.id','desc')->findAll($length, $start);
            $this->where();
            $totalRecord = $this->model->countAllResults();
            if(method_exists($this,'afterIndex')){
                $data = $this->afterIndex($data);
            }
            return $this->sendResponse($data,201,[
                'totalRecord' => $totalRecord,
            ]);
        }
        return $this->sendResponse('Model Not Found',201,'Model Not Found '.$this->model);

    }
	
}

	
	