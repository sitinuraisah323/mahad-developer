<?php

namespace App\Controllers\Api\SummerNote;

use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Bagus Aditia Setiawan
 * @contact 081214069289
 * @copyright saeapplication.com
 */
class SummerNote extends BaseApiController
{
    public $modelName = '\App\Models\Summernote';

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]

    public $fillSearch = [
        // 'subject'              => 'subject',
    ];

    public $searchValue = 'subject';

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

    //    [
    //        'name' => [
    //        'label'  => 'Name',
    //        'rules'  => 'required',
    //        'errors' => [
    //        'required' => 'Required Name '
    //        ]
    //    ],
    // public $validateInsert = [
    //     'subject' => [
    //         'label'  => 'subject',
    //         'rules'  => 'required',
    //     ],
    //     'content' => [
    //         'label'  => 'content',
    //         'rules'  => 'required',
    //     ]
    // ];

    // public $validateUpdate = [
    //     'id' => [
    //         'label'  => 'id',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Id harus di isi'
    //         ]
    //     ],
    //     'subject' => [
    //         'label'  => 'subject',
    //         'rules'  => 'required',
    //     ],
    //     'content' => [
    //         'label'  => 'content',
    //         'rules'  => 'required',
    //     ]
    // ];

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]
    // public $fillableInsert = [
    //     'subject'              => 'subject',
    //     'content' => 'content'
    // ];

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]


    // public $fillableIupdate = [
    //     'subject'              => 'subject',
    //     'content' => 'content'
    // ];

    public function insert()
    {
        $this->validate([
            'subject' => [
                'label'  => 'subject',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'subject Kosong'
                ]
            ],
            'summernoteExample' => [
                'label'  => 'content',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'content Kosong'
                ]
            ],
            'sub_subject' => [
                'label'  => 'sub_subject',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'subject Kosong'
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
                'subject'      =>  $this->request->getPost('subject'),
                'content'        =>  $this->request->getPost('summernoteExample'),
                'sub_subject'        =>  $this->request->getPost('sub_subject')

            ];
            $this->model->insert($data);
            return $this->sendResponse($this->model->find($this->model->getInsertID()), 201, 'Successfully insert post user');
        }
    }

    public function updated()
    {
        echo "TEST";
        // $id['id'] = $this->request->getPost('id');
        // $data = [                
        //     'subject'      =>  $this->request->getPost('subject'), 
        //     'content'        =>  $this->request->getPost('content'),

        // ];
        // $this->model->update($id,$data);
        // return $this->sendResponse($this->model->find($this->model->getInsertID()),201,'Successfully insert post user');
    }

    //    product
    public $content = 'Setting Level';
    //--------------------------------------------------------------------

}
