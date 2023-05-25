<?php

namespace App\Controllers\Api\Days;

use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Bagus Aditia Setiawan
 * @contact 081214069289
 * @copyright saeapplication.com
 */
class Days extends BaseApiController
{
    public $modelName = '\App\Models\Days';

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
        'name' => [
            'label'  => 'name',
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
        'startdate'         => 'startdate',
        'enddate'           => 'enddate'
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
        'startdate'         => 'startdate',
        'enddate'           => 'enddate'
    ];

    //    product
    public $content = 'Setting Days';
    //--------------------------------------------------------------------

}
