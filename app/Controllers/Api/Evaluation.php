<?php namespace App\Controllers\Api;
use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Enur Nurjaman
 * @contact 087xxx
 * @copyright sindigilive.com
 */


class Evaluation extends BaseApiController
{
    public $modelName = '\App\Models\Evaluation';

       /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]

    public $fillSearch = [
        // 'fullname'  => 'fullname'
    ];

    /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]
    public $fillWhere = [
        'id' => 'id',
    ];

    

    /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]

    /**
     * @var array
     * column of name table database
     * name of param post
     */
//    [
//        'column'    => 'value'
//    ]

//    product
    public $content = 'Master Users';
    //--------------------------------------------------------------------

    public function getEvaluation($id_subject)
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

            $data = $this->model->select('*,evaluations.id as ids,evaluations.description as descript, visitors.name as fullname, subject.name as subject' )
                                ->join('subject', 'subject.id=evaluations.id_subject')
                                ->join('users', 'users.id=evaluations.id_user')
                                ->join('visitors', 'visitors.id=users.id_visitor')
                                ->where('id_subject', $id_subject)->orderBy($this->model->table.'.id','desc')->findAll($length, $start);
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

    public function insertEvaluation(){
        $this->validate([
            'id_subject' => [
                'label'  => 'id_subject',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'id_subject Kosong'
                ]
            ],
            'id_user' => [
                'label'  => 'id_user',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'id_user Kosong'
                ]
            ],
            'score' => [
                'label'  => 'score',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'score Kosong'
                ]
            ],
            'description' => [
                'label'  => 'description',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'description Kosong'
                ]
            ],
            
        ]);

        if($this->validator->run() == false){
            $message = '';
            foreach ($this->validator->getErrors() as $key => $value){
                $message .= $key.' '.$value.' <br>';
            }
            return $this->sendResponse($this->validator->getErrors(),501,$message);
        }else{
            $data = [                
                'id_subject'      =>  $this->request->getPost('id_subject'), 
                'id_user'        =>  $this->request->getPost('id_user'),
                'score'        =>  $this->request->getPost('score'),
                'description'        =>  $this->request->getPost('description'),
                
            ];
            $this->model->insert($data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post user');
        }
    }

    public function updateEvaluation() {
            $id['id'] = $this->request->getPost('id');
            $data = [                
                'id_subject'      =>  $this->request->getPost('id_subject'), 
                'id_user'        =>  $this->request->getPost('id_user'),
                'score'        =>  $this->request->getPost('score'),
                'description'        =>  $this->request->getPost('description'),
                
            ];
            $this->model->update($id,$data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post user');
    }


}
