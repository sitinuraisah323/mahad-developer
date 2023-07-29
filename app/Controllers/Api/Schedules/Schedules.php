<?php

namespace App\Controllers\Api\Schedules;

use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Bagus Aditia Setiawan
 * @contact 081214069289
 * @copyright saeapplication.com
 */
class Schedules extends BaseApiController
{
    public $modelName = '\App\Models\Schedules';
    public $modelDays = '\App\Models\Days';

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]

    public $fillSearch = [
        'name'              => 'name',
    ];

    public $searchValue = 'name';

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
        'id_days' => 'id_days',
        'startdate' => 'startdate',
        'enddate' => 'enddate'
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
        'id_days' => 'id_days',
        'startdate' => 'startdate',
        'enddate' => 'enddate'
    ];

    //    product
    public $content = 'Setting Schedules';
    //--------------------------------------------------------------------

    public function getSchedules()
    {
        // echo 'Yes'; exit;
        $dataList = $this->model->select('schedule.*, days.name as days, subject.name as materi ')
                                ->join('days','days.id=schedule.id_days')
                                ->join('subject','subject.id=schedule.id_subject')
                                ->findAll();
        return $this->sendResponse($dataList);

    }

    public function insert(){
        $this->validate([
            'id_days' => [
                'label'  => 'id_days',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ],
            'id_subject' => [
                'label'  => 'id_subject',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ],
            'startdate' => [
                'label'  => 'startdate',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ],
            'enddate' => [
                'label'  => 'enddate',
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
                'id_days'      =>  $this->request->getPost('id_days'), 
                'id_subject'        =>  $this->request->getPost('id_subject'),
                'startdate'        =>  $this->request->getPost('startdate'),
                'enddate'        =>  $this->request->getPost('enddate'),
                
            ];
            $this->model->insert($data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post Schedules');
        }
    }

    public function updated() {
        $id['id'] = $this->request->getPost('id');
        
        $data = [                
            'id_days'    =>  $this->request->getPost('id_days'), 
            'id_subject'      =>  $this->request->getPost('id_subject'),
            'startdate'         =>  $this->request->getPost('startdate'),
            'enddate'      =>  $this->request->getPost('enddate'),
        ];
        $this->model->update($id,$data);
        return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully update post schedules');
}
}
