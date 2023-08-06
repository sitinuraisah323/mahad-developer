<?php 

namespace App\Controllers\Api\Detail;

use App\Controllers\Api\BaseApiController;

class Detail extends BaseApiController
{
    public $modelName = '\App\Models\DetailSubjects';

    public $fillSearch = [
        'id_subject'              => 'id_subject',
    ];

    public $searchValue = 'id_subject';

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]
    public $fillWhere = [
        // 'name'              => 'name',
    ];

    //    [
    //        'name' => [
    //        'label'  => 'Name',
    //        'rules'  => 'required',
    //        'errors' => [
    //        'required' => 'Required Name '
    //        ]
    //    ],
    public $validateInsert = [
        
    ];

    public $validateUpdate = [
        'id' => [
            'label'  => 'id',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Id harus di isi'
            ]
        ]
    ];

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]
    public $fillableInsert = [
        'id_subject' => 'id_subject',
        'id_pemateri' => 'id_pemateri',
        'description1' => 'description1',
        'description2' => 'description2'
    ];

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]


    public $fillableIupdate = [
        'id_subject' => 'id_subject',
        'id_pemateri' => 'id_pemateri',
        'description1' => 'description1',
        'description2' => 'description2'
    ];

    public function getDetail()
    {
        // echo 'Yes'; exit;
        $dataList = $this->model->select('detail_subject.*, visitors.name as pemateri, subject.name as materi ')
                                ->join('visitors','visitors.id=detail_subject.id_pemateri')
                                ->join('subject','subject.id=detail_subject.id_subject')
                                ->findAll();
        return $this->sendResponse($dataList);

    }


    public function insert(){
        $this->validate([
            'id_subject' => [
                'label'  => 'id_subject',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ],
            'id_pemateri' => [
                'label'  => 'id_pemateri',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ],
            'description1' => [
                'label'  => 'description1',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ],
            'description2' => [
                'label'  => 'description2',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
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
                'id_subject'        =>  $this->request->getPost('id_subject'),
                'id_pemateri'      =>  $this->request->getPost('id_pemateri'), 
                'description1'        =>  $this->request->getPost('description1'),
                'description2'        =>  $this->request->getPost('description2'),
                
            ];
            $this->model->insert($data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post Detail Materi');
        }
    }

    public function updated() {
        $id['id'] = $this->request->getPost('id');
        
        $data = [                
            'id_pemateri'    =>  $this->request->getPost('id_pemateri'), 
            'id_subject'      =>  $this->request->getPost('id_subject'),
            'description1'         =>  $this->request->getPost('description1'),
            'description2'      =>  $this->request->getPost('description2'),
        ];
        $this->model->update($id,$data);
        return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully update Detail Materi');
}
}
