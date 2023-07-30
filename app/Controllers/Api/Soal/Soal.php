<?php

namespace App\Controllers\Api\Soal;

use App\Controllers\Api\BaseApiController;


class Soal extends BaseApiController
{
    public $modelName = '\App\Models\Soal';

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
    public $validateInsert = [];

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
        'id_materi' => 'id_materi',
        'description' => 'description'
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
        'id_materi' => 'id_materi',
        'description' => 'description'
    ];

    //    product
    public $content = 'Setting Schedules';
    //--------------------------------------------------------------------

    // public function getSchedules()
    // {
    //     // echo 'Yes'; exit;
    //     $dataList = $this->model->select('schedule.*, days.name as days, subject.name as materi ')
    //         ->join('days', 'days.id=schedule.id_days')
    //         ->join('subject', 'subject.id=schedule.id_subject')
    //         ->findAll();
    //     return $this->sendResponse($dataList);
    // }
    public function getSoal()
    {
        // echo 'Yes'; exit;
        $dataList = $this->model->select('soal.*, subject.name as materi ')
            ->join('subject', 'subject.id=soal.id_materi')
            ->findAll();
        return $this->sendResponse($dataList);
    }

    public function insert()
    {
        $this->validate([
            'id_materi' => [
                'label'  => 'id_materi',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ],
            'description' => [
                'label'  => 'description',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Wajib di isi'
                ]
            ]

        ]);

        if ($this->validator->run() == false) {
            $message = '';
            foreach ($this->validator->getErrors() as $key => $value) {
                $message .= $key . ' ' . $value . ' <br>';
            }
            return $this->sendResponse($this->validator->getErrors(), 501, $message);
        } else {
            $data = [
                'id_materi'      =>  $this->request->getPost('id_materi'),
                'description'        =>  $this->request->getPost('description'),
            ];
            $this->model->insert($data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()), 201, 'Successfully insert post Schedules');
        }
    }

    public function updated()
    {
        $id['id'] = $this->request->getPost('id');

        $data = [
            'id_materi'    =>  $this->request->getPost('id_materi'),
            'description'      =>  $this->request->getPost('description'),
        ];
        $this->model->update($id, $data);
        return $this->sendResponse($this->model->find($this->model->getInsertID()), 201, 'Successfully update post schedules');
    }
}
