<?php

namespace App\Controllers\Api\Subject;

use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Bagus Aditia Setiawan
 * @contact 081214069289
 * @copyright saeapplication.com
 */
class Subject extends BaseApiController
{
    public $modelName = '\App\Models\Subjects';

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
        'id'              => 'id',
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
        'name' => [
            'label'  => 'name',
            'rules'  => 'required',
        ],
        'description' => [
            'label'  => 'description',
            'rules'  => 'required',
        ]
    ];

    public $validateUpdate = [
        'id' => [
            'label'  => 'id',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Id harus di isi'
            ]
        ],
        'name' => [
            'label'  => 'name',
            'rules'  => 'required',
        ],
        'description' => [
            'label'  => 'description',
            'rules'  => 'required',
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
        'name'              => 'name',
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
        'name'              => 'name',
        'description' => 'description'
    ];

    //    product
    public $content = 'Setting Subjects';
    //--------------------------------------------------------------------

    
}
