<?php

namespace App\Controllers\Api\Pengumuman;

use App\Controllers\Api\BaseApiController;

/**
 * Class Users
 * @package App\Controllers\Api
 * @author Bagus Aditia Setiawan
 * @contact 081214069289
 * @copyright saeapplication.com
 */
class Pengumuman extends BaseApiController
{
    public $modelName = '\App\Models\Pengumuman';

    /**
     * @var array
     * column of name table database
     * name of param post
     */
    //    [
    //        'column'    => 'value'
    //    ]

    public $fillSearch = [
        'subject'              => 'subject',
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
        'subject' => [
            'label'  => 'subject',
            'rules'  => 'required',
        ],
        'detail' => [
            'label'  => 'detail',
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
        'subject' => [
            'label'  => 'subject',
            'rules'  => 'required',
        ],
        'detail' => [
            'label'  => 'detail',
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
        'subject'              => 'subject',
        'detail' => 'detail'
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
        'subject'              => 'subject',
        'detail' => 'detail'
    ];

    //    product
    public $content = 'Setting Level';
    //--------------------------------------------------------------------

}
